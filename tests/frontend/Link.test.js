import renderer from 'react-test-renderer';
import {render} from "@testing-library/react";
import Link from "../../resources/js/components/Link";

it('Link', () => {
    var component = renderer.create(
        <Link page="https://google.com">Google</Link>
    );
    let tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseEnter();
    })

    tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseLeave();
    })
})

it('Link - #', () => {
    var component = renderer.create(
        <Link>Google</Link>
    );
    let tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseEnter();
    })

    tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseLeave();
    })
})