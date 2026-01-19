import { LitElement, html } from "lit";

export class NoticeBar extends LitElement {
  static get properties() {
    return {
      type: { type: String },
      message: { type: String }
    };
  }

  constructor() {
    super();
    this.type = "info";
    this.message = "";
  }

  createRenderRoot() {
    return this;
  }

  getColor() {
    switch (this.type) {
      case "warning":
        return "#FF0000";
      case "info":
      default:
        return "#1DF0F0";
    }
  }

  render() {
    const borderColor = this.getColor();
    return html`
      <div
        style="border-color:${borderColor};"
        class=" border-solid border-2 text-center"
      >
        ${this.message}
      </div>
    `;
  }
}
