<?php
// phpcs:disable Yoast.NamingConventions.NamespaceName.TooLong -- Needed in the folder structure.
// phpcs:disable Yoast.NamingConventions.NamespaceName.MaxExceeded
namespace Yoast\WP\SEO\Dashboard\Domain\Score_Groups\Readability_Score_Groups;

/**
 * This class describes a good readability score group.
 */
class Good_Readability_Score_Group extends Abstract_Readability_Score_Group {

	/**
	 * Gets the name of the readability score group.
	 *
	 * @return string The name of the readability score group.
	 */
	public function get_name(): string {
		return 'good';
	}

	/**
	 * Gets the value of the readability score group that is used when filtering on the posts page.
	 *
	 * @return string The name of the readability score group that is used when filtering on the posts page.
	 */
	public function get_filter_value(): string {
		return 'good';
	}

	/**
	 * Gets the position of the readability score group.
	 *
	 * @return int The position of the readability score group.
	 */
	public function get_position(): int {
		return 0;
	}

	/**
	 * Gets the minimum score of the readability score group.
	 *
	 * @return int|null The minimum score of the readability score group.
	 */
	public function get_min_score(): ?int {
		return 71;
	}

	/**
	 * Gets the maximum score of the readability score group.
	 *
	 * @return int|null The maximum score of the readability score group.
	 */
	public function get_max_score(): ?int {
		return 100;
	}
}
