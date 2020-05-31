import React from 'react'  
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"

const IndexPage = ({ data }) => ( 
  <Layout> 
  <div>
    <p>
      <h3>Произведения</h3>
    </p>
    <ul>
      {data.allStrapiPosts.edges.map(document => (
        <li key={document.node.id}>
            <h4>{document.node.title}</h4>
          <font color="#696969">
            <h5>{document.node.date}</h5>
            <h4>Автор произведения — <Link to={`/autor/{document.node.autor.id}`}> {document.node.autor.Name} {document.node.autor.Surname}</Link></h4>
            <h4>Журнал — <Link to={`/magazine/{document.node.magazine.id}`}> {document.node.magazine.Name} (Рейтинг: {document.node.magazine.rating})</Link></h4>
          </font>
        </li>
      ))}
    </ul>
  </div>
  </Layout>
)
export default IndexPage
export const pageQuery = graphql`  
  query IndexQuery {
    allStrapiPosts {
      edges {
        node {
          id
          title
          date
          autor{
            id
            Name
            Surname
          }
          magazine{
            id
            Name
            rating
          }
        }
      }
    }
  }
`
