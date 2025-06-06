<?php
/**
 * File: PgCache_QsExempts.php
 *
 * @package W3TC
 */

namespace W3TC;

/**
 * Class: PgCache_QsExempts
 */
class PgCache_QsExempts {
	/**
	 * Retrieves an array of query string parameters that are exempt from processing.
	 *
	 * @return array List of query string parameter names that are exempt.
	 */
	public static function get_qs_exempts() {
		return array(
			'_branch_match_id',
			'_bta_c',
			'_bta_tid',
			'_ga',
			'_gl',
			'_ke',
			'adgroupid',
			'adid',
			'age-verified',
			'ao_noptimize',
			'campaignid',
			'campid',
			'click_id',
			'cn-reloaded',
			'customid',
			'dicbo',
			'dm_i',
			'ef_id',
			'epik',
			'fb_action_ids',
			'fb_action_types',
			'fb_source',
			'fbclid',
			'gclid',
			'gclsrc',
			'gdffi',
			'gdfms',
			'gdftrk',
			'hsa_acc',
			'hsa_ad',
			'hsa_cam',
			'hsa_grp',
			'hsa_kw',
			'hsa_mt',
			'hsa_net',
			'hsa_src',
			'hsa_tgt',
			'hsa_ver',
			'igshid',
			'li_fat_id',
			'matomo_campaign',
			'matomo_cid',
			'matomo_content',
			'matomo_group',
			'matomo_keyword',
			'matomo_medium',
			'matomo_placement',
			'matomo_source',
			'mc_cid',
			'mc_eid',
			'mkcid',
			'mkevt',
			'mkrid',
			'mkwid',
			'msclkid',
			'mtm_campaign',
			'mtm_cid',
			'mtm_content',
			'mtm_group',
			'mtm_keyword',
			'mtm_medium',
			'mtm_placement',
			'mtm_source',
			'pcrid',
			'piwik_campaign',
			'piwik_keyword',
			'piwik_kwd',
			'pk_campaign',
			'pk_cid',
			'pk_content',
			'pk_keyword',
			'pk_kwd',
			'pk_medium',
			'pk_source',
			'pp',
			'redirect_log_mongo_id',
			'redirect_mongo_id',
			'ref',
			's_kwcid',
			's_kwcid',
			'sb_referer_host',
			'ScCid',
			'si',
			'sscid',
			'tblci',
			'toolid',
			'trk_contact',
			'trk_module',
			'trk_msg',
			'trk_sid',
			'ttclid',
			'twclid',
			'usqp',
			'utm_campaign',
			'utm_content',
			'utm_expid',
			'utm_id',
			'utm_medium',
			'utm_source',
			'utm_term',
			'wbraid',
		);
	}
}
