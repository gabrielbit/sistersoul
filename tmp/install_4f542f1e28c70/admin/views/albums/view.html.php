<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * Albums View
 */
class MusicViewAlbums extends JView {

  protected $items;
  protected $pagination;
  protected $state;

  /**
   * Albums view display method
   * @return void
   */
  function display($tpl = null) {
    require_once JPATH_COMPONENT.'/helpers/music.php';
    // Load the submenu.
    MusicHelper::addSubmenu(JRequest::getCmd('view', 'albums'));

    // Get data from the model
    $this->items = $this->get('Items');
    $this->pagination = $this->get('Pagination');
    $this->state = $this->get('State');

    // Check for errors.
    if (count($errors = $this->get('Errors'))) {
      JError::raiseError(500, implode('<br />', $errors));
      return false;
    }

    // Set the toolbar
    $this->addToolBar();

    // Display the template
    parent::display($tpl);
  }

  /**
   * Setting the toolbar
   */
  protected function addToolBar() {
    JToolBarHelper::title(JText::_('COM_MUSIC_MANAGER_ALBUMS'));
    JToolBarHelper::deleteList('', 'albums.delete');
    JToolBarHelper::editList('album.edit');
    JToolBarHelper::addNew('album.add');
  }

  /**
   * Method to set up the document properties
   *
   * @return void
   */
  protected function setDocument() {
    $document = JFactory::getDocument();
    $document->setTitle(JText::_('COM_MUSIC_ADMINISTRATION'));
  }
}