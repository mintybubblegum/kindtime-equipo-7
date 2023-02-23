import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Ad from "./Ad";

const testAd = {
  title: "Ad title 04",
  client: {},
  description:
    "Ad description 04 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
  image: "http://fissep.es/img/bg/acompanamiento.jpg",
  id: 4,
};

describe("Ad component", () => {
  render(<Ad ad={testAd} />);
  it("renders see more btn", () => {
    expect(screen.getByTestId(/seeMoreBtn/i)).toBeDefined();
  });
  it("renders contact btn", () => {
    expect(screen.getByTestId(/contactBtn/i)).toBeDefined();
  });
  it("renders ad card", () => {
    expect(screen.getByTestId(/adCard/i)).toBeDefined();
  });
  it("fills img alt inside the card", () => {
    expect(screen.getByAltText(/image of the ad/i)).toBeDefined();
  });
});
