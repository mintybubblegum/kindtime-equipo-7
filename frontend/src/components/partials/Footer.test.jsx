import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Footer from "./Footer";

describe("Footer component", () => {
  render(<Footer />);
  it("renders home link", () => {
    expect(screen.getByTestId(/homelink/i)).toBeDefined();
  });
  it("renders contact link", () => {
    expect(screen.getByTestId(/contactlink/i)).toBeDefined();
  });
  it("renders about link", () => {
    expect(screen.getByTestId(/aboutlink/i)).toBeDefined();
  });
});
