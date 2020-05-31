import React from 'react'  
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"

const MagazinePage = ({ data }) => ( 
  <Layout> 
  <div>
    <p>
      <h3>Журналы</h3>
    </p>
    <ul>
      {data.allStrapiMagazines.edges.map(document => (
        <li key={document.node.id}>
            <h4>Журнал "{document.node.Name}"</h4>
            <p>Рейтинг: {document.node.rating}</p>
        </li>
      ))}
    </ul>
  </div>
  </Layout>
)
export default MagazinePage
export const query = graphql`  
  query MagazinePage {
    allStrapiMagazines {
      edges {
        node {
          id
          Name
          rating
        }
      }
    }
  }
`
