<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * MusicList Model
 */
class MusicModelArtists extends JModelList {
  /**
   * Method to build an SQL query to load the list data.
   *
   * @return      string  An SQL query
   */
  protected function getListQuery() {
    // Create a new query object.
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    // Select some fields
    $query->select('id,alias,name,published,checked_out,checked_out_time,editor,ordering,params,access');
    // From the artist table
    $query->from('#__music_artist');
    return $query;
  }
}