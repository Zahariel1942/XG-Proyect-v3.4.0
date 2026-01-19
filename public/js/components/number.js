import { LitElement } from 'lit';

export class FormattedNumber extends LitElement {
  static get properties() {
    return {
      value: { type: Number }
    };
  }

  constructor() {
    super();
    this.value = 0;
  }

  createRenderRoot() {
    return this;
  }

  render() {
    return this.value.toLocaleString();
  }
}