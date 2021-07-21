<?php
/**
 * Internal payment method (only for admin orders)
 * Copyright (C) 2021 Lee Brooks <lee@bellabarista.co.uk>
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace TimeLeisure\InternalPayment\Model\Payment;

class InternalPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    const CODE                  = 'internalpayment';
    protected $_code            = self::CODE;
    protected $_isOffline       = true;
    protected $_canUseCheckout  = false;
    protected $_canUseInternal  = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
