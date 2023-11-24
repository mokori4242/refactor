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
});