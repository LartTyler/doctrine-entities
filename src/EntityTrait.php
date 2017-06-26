<?php
	namespace DaybreakStudios\Utility\DoctrineEntities;

	trait EntityTrait {
		/**
		 * @var mixed|null
		 */
		protected $id = null;

		/**
		 * @return mixed|null
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * @return string
		 */
		public function __toString() {
			return sprintf('%s{id: %d}', get_class(), $this->getId() ?: -1);
		}
	}