import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import About from "./About";

describe("About component", () => {
    render(<About />);
    it("renders image", () => {
        expect(screen.getByTestId(/imgAbout/i)).toBeDefined();
    });
    it("renders link back to home", () => {
        expect(screen.getByTestId(/back/i)).toBeDefined();
    });
    it("renders text", () => {
        expect(screen.getAllByTestId(/about-text/i).length).toBe(3);
    });
    it("renders heading", () => {
        expect(screen.getByTestId(/heading/i)).toBeDefined();
    });
});