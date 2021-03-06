<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Condition\Context;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

/**
 * ### Condition: Is context Frontend?
 *
 * A condition ViewHelper which renders the `then` child if
 * current context being rendered is FE.
 *
 * ### Examples
 *
 *     <!-- simple usage, content becomes then-child -->
 *     <v:condition.context.isFrontend>
 *         Hooray for BE contexts!
 *     </v:condition.context.isFrontend>
 *     <!-- extended use combined with f:then and f:else -->
 *     <v:condition.context.isFrontend>
 *         <f:then>
 *            Hooray for BE contexts!
 *         </f:then>
 *         <f:else>
 *            Maybe BE, maybe CLI.
 *         </f:else>
 *     </v:condition.context.isFrontend>
 *
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 * @subpackage ViewHelpers\If\Context
 */
class IsFrontendViewHelper extends AbstractConditionViewHelper {

	/**
	 * Render method
	 *
	 * @return string
	 */
	public function render() {
		if ($this->isFrontendContext()) {
			return $this->renderThenChild();
		}
		return $this->renderElseChild();
	}

	/**
	 * @return boolean
	 */
	protected function isFrontendContext() {
		return ('FE' === TYPO3_MODE);
	}

}
