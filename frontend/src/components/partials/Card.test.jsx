import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Card from "./Card";

describe("Card component", () => {
  render(<Card />);
  it("renders service img", () => {
    expect(screen.getByTestId(/serviceImg/i)).toBeDefined();
  });
  it("renders see more link", () => {
    expect(screen.getByTestId(/seeMoreLink/i)).toBeDefined();
  });
  it("renders contact link", () => {
    expect(screen.getByTestId(/contactLink/i)).toBeDefined();
  });
});
