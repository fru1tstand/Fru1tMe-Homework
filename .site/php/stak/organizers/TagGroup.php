<?php
namespace stak\organizers;

/**
 * TagGroup contains a collection of TagContainers. This class is currently unused directly, but
 * may in the future.
 * @package stak\organizers
 */
class TagGroup {
	/** @var  TagContainer */	private $tagContainers;

	/**
	 * Creates a new TagGroup, optionally instantiating it with the given containers
	 * @param array $tagContainers
	 * @throws Exception
	 */
	public function __construct(array $tagContainers = null) {
		$this->tagContainers = array();

		if (is_null($tagContainers))
			return;

		foreach ($tagContainers as $tagContainer) {
			if (!($tagContainer instanceof TagContainer))
				throw new Exception("There's something happening here, and it sure ain't a
				TagContainer");

			$this->tagContainers[] = $tagContainer;
		}
	}

	/**
	 * Simply adds a tag container to this group
	 * @param TagContainer $tc
	 */
	public function addTagContainer(TagContainer &$tc) {
		$this->tagContainers[] = &$tc;
	}


	// Sorters
	public function sortAlphabetical() {
		if (count($this->tagContainers) > 1) {
			usort($this->tagContainers, function(TagContainer $a, TagContainer $b) {
				return $a->getTag()->compareAlphabetical($b->getTag());
			});
		}
	}


	// Getters
	/**
	 * @return TagContainer
	 */
	public function getTagContainers() {
		return $this->tagContainers;
	}
}
