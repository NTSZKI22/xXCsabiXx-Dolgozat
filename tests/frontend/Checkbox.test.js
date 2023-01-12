import { render, fireEvent, screen, getByRole} from "@testing-library/react";
import Checkbox from "../../resources/js/components/Checkbox";


test("Checkbox", () => {
    const { queryByLabelText, getByLabelText } = render(<Checkbox labelOn="Bekapcs" labelOff="Kikapcs" />)

    //fireEvent.click(screen.getByRole("input"))

    expect(queryByLabelText("Kikapcs")).toBeTruthy()

    fireEvent.click(getByLabelText("Kikapcs"))

    expect(queryByLabelText("Bekapcs")).toBeTruthy()
    expect(queryByLabelText("Kikapcs")).toBeFalsy()
})