import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Navbar from "./Navbar";

describe("Navbar component", () => {
  render(<Navbar />);
  it("renders link around logo", () => {
    expect(screen.getByTestId(/logoLink/i)).toBeDefined();
  });
  it("renders nav element", () => {
    expect(screen.getByTestId(/navbar/i)).toBeDefined();
  });
  it("renders ul element with the nav links", () => {
    expect(screen.getByTestId(/linksList/i)).toBeDefined();
  });
  it("renders 3 out links", () => {
    expect(screen.getAllByTestId(/outLink/i).length).toBe(3);
  });
});
