<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeToPeriod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeToPeriod';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  付费模式，当前仅可选择：pre_paid
    * periodType  创建类型，按年(year)或者按月(month)
    * periodNum  创建类型的数量，按年或按月的个数
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * vaultIds  资源列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool',
            'consoleUrl' => 'string',
            'vaultIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  付费模式，当前仅可选择：pre_paid
    * periodType  创建类型，按年(year)或者按月(month)
    * periodNum  创建类型的数量，按年或按月的个数
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * vaultIds  资源列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'consoleUrl' => null,
        'vaultIds' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * chargingMode  付费模式，当前仅可选择：pre_paid
    * periodType  创建类型，按年(year)或者按月(month)
    * periodNum  创建类型的数量，按年或按月的个数
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * vaultIds  资源列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay',
            'consoleUrl' => 'console_url',
            'vaultIds' => 'vault_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  付费模式，当前仅可选择：pre_paid
    * periodType  创建类型，按年(year)或者按月(month)
    * periodNum  创建类型的数量，按年或按月的个数
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * vaultIds  资源列表
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'consoleUrl' => 'setConsoleUrl',
            'vaultIds' => 'setVaultIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  付费模式，当前仅可选择：pre_paid
    * periodType  创建类型，按年(year)或者按月(month)
    * periodNum  创建类型的数量，按年或按月的个数
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * vaultIds  资源列表
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'consoleUrl' => 'getConsoleUrl',
            'vaultIds' => 'getVaultIds'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['consoleUrl'] = isset($data['consoleUrl']) ? $data['consoleUrl'] : null;
        $this->container['vaultIds'] = isset($data['vaultIds']) ? $data['vaultIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 16)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 8)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['chargingMode']) && !preg_match("/^[a-zA-Z0-9_\\-]*$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^[a-zA-Z0-9_\\-]*$/.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if ((mb_strlen($this->container['periodType']) > 64)) {
                $invalidProperties[] = "invalid value for 'periodType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['periodType']) < 1)) {
                $invalidProperties[] = "invalid value for 'periodType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-]*$/", $this->container['periodType'])) {
                $invalidProperties[] = "invalid value for 'periodType', must be conform to the pattern /^[a-zA-Z0-9_\\-]*$/.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vaultIds'] === null) {
            $invalidProperties[] = "'vaultIds' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets chargingMode
    *  付费模式，当前仅可选择：pre_paid
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 付费模式，当前仅可选择：pre_paid
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  创建类型，按年(year)或者按月(month)
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 创建类型，按年(year)或者按月(month)
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  创建类型的数量，按年或按月的个数
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 创建类型的数量，按年或按月的个数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  到期后是否自动续期，默认不续期
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew 到期后是否自动续期，默认不续期
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动付费，默认为不自动付费
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否自动付费，默认为不自动付费
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets consoleUrl
    *  跳转URL
    *
    * @return string|null
    */
    public function getConsoleUrl()
    {
        return $this->container['consoleUrl'];
    }

    /**
    * Sets consoleUrl
    *
    * @param string|null $consoleUrl 跳转URL
    *
    * @return $this
    */
    public function setConsoleUrl($consoleUrl)
    {
        $this->container['consoleUrl'] = $consoleUrl;
        return $this;
    }

    /**
    * Gets vaultIds
    *  资源列表
    *
    * @return string[]
    */
    public function getVaultIds()
    {
        return $this->container['vaultIds'];
    }

    /**
    * Sets vaultIds
    *
    * @param string[] $vaultIds 资源列表
    *
    * @return $this
    */
    public function setVaultIds($vaultIds)
    {
        $this->container['vaultIds'] = $vaultIds;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

