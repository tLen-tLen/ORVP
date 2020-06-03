import React from 'react'  
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"

const AutorPage = ({ data }) => ( 
  <Layout> 
  <div>
    <p>
      <h3>Авторы</h3>
    </p>
    <ul>
      {data.allStrapiAutors.edges.map(document => (
        <li key={document.node.id}>
            <h4>{document.node.Name}  {document.node.Surname}</h4>
            <p>{document.node.Desc}</p>
        </li>
      ))}
    </ul>
  </div>
  </Layout>
)
export default AutorPage
export const query = graphql`  
  query AutorPage {
    allStrapiAutors {
      edges {
        node {
          id
          Name
          Surname
          Desc
        }
      }
    }
  }
`
