import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import About from "./About";

describe("Home component", () => {
    render(<About />);
    it("Check if the image in in the document", () => {
        expect(screen.getByTestId(/h1Slogan/i)).toBeInTheDocument();
    });
});
