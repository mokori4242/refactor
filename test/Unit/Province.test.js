import { Province, sampleProvinceData } from "../../Province";

describe('province', function () {
    let asia;
    beforeEach(function () {
        asia = new Province(sampleProvinceData());
    });

    it('shortfallTest', () => {
        expect(asia.shortfall).toEqual(5);
    });

    it('profitTest', () => {
        expect(asia.profit).toEqual(230);
    });

    it('changeProduction', () => {
        asia.producers[0].production = 20;
        expect(asia.shortfall).toEqual(-6);
        expect(asia.profit).toEqual(292);
    });

    it('zeroDemand', () => {
        asia.demand = 0;
        expect(asia.shortfall).toEqual(-25);
        expect(asia.profit).toEqual(0);
    });

    it('negativeDemand', () => {
        asia.demand = -1;
        expect(asia.shortfall).toEqual(-26);
        expect(asia.profit).toEqual(-10);
    });

    it('emptyStringDemand', () => {
        asia.demand = "";
        expect(asia.shortfall).toBeNaN();
        expect(asia.profit).toBeNaN();
    });
});

describe('no producers', function () {
    let noProducers;
    beforeEach(function () {
        const data = {
            name: noProducers,
            producers: [],
            demand: 30,
            price: 20
        };
        noProducers = new Province(data);
    });

    it('shortfallTest', () => {
        expect(noProducers.shortfall).toEqual(30);
    });

    it('profitTest', () => {
        expect(noProducers.profit).toEqual(0);
    });
});