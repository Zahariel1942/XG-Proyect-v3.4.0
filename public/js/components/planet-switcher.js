import { LitElement, html } from "lit";

export class PlanetSwitcher extends LitElement {
  static get properties() {
    return {
      planets: { type: Array }
    };
  }

  constructor() {
    super();
  }

  createRenderRoot() {
    return this;
  }

  handlePlanetChange(event) {
    const selectedPlanet = event.target.value;
    const url = new URL(window.location.href);
    url.searchParams.set('cp', selectedPlanet);
    window.location.href = url.toString();
  }

  render() {
    const _planets = this.planets || [];
    return html`
      <select name="planet" @change="${this.handlePlanetChange}">
        ${_planets.map(
          (planet) =>
            html`<option value="${planet.id}" ?selected="${planet.current}">
              ${planet.name}
              [${planet.coordinates.galaxy}:${planet.coordinates
                .system}:${planet.coordinates.planet}]
            </option>`
        )}
      </select>
    `;
  }
}
