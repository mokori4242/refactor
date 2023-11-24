import { Province, sampleProvinceData  } from "../../Province";

it('shortfallTest', () => {
    const asia = new Province(sampleProvinceData());
    expect(asia.shortfall).toEqual(5);
});

it('profitTest', () => {
    const asia = new Province(sampleProvinceData());
    expect(asia.profit).toEqual(230);
});