import { Province, sampleProvinceData  } from "../../Province";

it('shortfallTest', () => {
    const asia = new Province(sampleProvinceData());
    expect(asia.shortfall).toEqual(5);
});