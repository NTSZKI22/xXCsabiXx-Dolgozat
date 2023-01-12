const app = require("../../resources/js/functions/app.js")

test("sum", () => {
    expect(app(1,2)).toBe(3)
    expect(app(69,1)).toBe(70)
    expect(app(22,8)).toBe(30)
})