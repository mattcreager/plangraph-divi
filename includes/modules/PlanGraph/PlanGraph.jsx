
import React, { Component } from 'react';
import './style.css';

class PlanGraph extends Component {

  static slug = 'pldi_hello_world';

  componentDidMount() {
    const esmScript = document.createElement("script");

    esmScript.src = "https://unpkg.com/@manifoldco/web-components@latest/dist/manifold/manifold.esm.js";
    esmScript.async = true;
    esmScript.type = 'module';

    document.body.appendChild(esmScript);

    const componentScript = document.createElement("script");

    componentScript.src = "https://unpkg.com/@manifoldco/web-components@latest/dist/manifold/manifold.js";
    componentScript.nomodule = true;

    document.body.appendChild(componentScript);
  }

  render() {
    return <plangraph-plan-table embed="emb-5gn6rtutazqvjpqc"></plangraph-plan-table>
  }
}


export default PlanGraph;
