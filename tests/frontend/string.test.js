const app = require("../../resources/js/functions/string.js")

test("string", () =>{
    expect(app.joinArrayElements("|", ["egy", "ketto", "harom", "negy"])).toBe("egy|ketto|harom|negy")

    expect(app.stringSearch("megapacinaka@faszát", "@")).toBe(true)
    expect(app.stringSearch("megapacinakafaszát", "@")).toBe(false)

})