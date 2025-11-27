<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWebTamperProtectStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWebTamperProtectStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectFailedNums  防护失败的数量
    * redundantNums  防护冗余数量
    * unprotectNums  未防护数量
    * protectedNums  已防护数量
    * protectTotalNums  防护资产总数
    * protectedEventNums  防护事件数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectFailedNums' => 'int',
            'redundantNums' => 'int',
            'unprotectNums' => 'int',
            'protectedNums' => 'int',
            'protectTotalNums' => 'int',
            'protectedEventNums' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectFailedNums  防护失败的数量
    * redundantNums  防护冗余数量
    * unprotectNums  未防护数量
    * protectedNums  已防护数量
    * protectTotalNums  防护资产总数
    * protectedEventNums  防护事件数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectFailedNums' => 'int32',
        'redundantNums' => 'int32',
        'unprotectNums' => 'int32',
        'protectedNums' => 'int32',
        'protectTotalNums' => 'int32',
        'protectedEventNums' => 'int32'
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
    * protectFailedNums  防护失败的数量
    * redundantNums  防护冗余数量
    * unprotectNums  未防护数量
    * protectedNums  已防护数量
    * protectTotalNums  防护资产总数
    * protectedEventNums  防护事件数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectFailedNums' => 'protect_failed_nums',
            'redundantNums' => 'redundant_nums',
            'unprotectNums' => 'unprotect_nums',
            'protectedNums' => 'protected_nums',
            'protectTotalNums' => 'protect_total_nums',
            'protectedEventNums' => 'protected_event_nums'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectFailedNums  防护失败的数量
    * redundantNums  防护冗余数量
    * unprotectNums  未防护数量
    * protectedNums  已防护数量
    * protectTotalNums  防护资产总数
    * protectedEventNums  防护事件数量
    *
    * @var string[]
    */
    protected static $setters = [
            'protectFailedNums' => 'setProtectFailedNums',
            'redundantNums' => 'setRedundantNums',
            'unprotectNums' => 'setUnprotectNums',
            'protectedNums' => 'setProtectedNums',
            'protectTotalNums' => 'setProtectTotalNums',
            'protectedEventNums' => 'setProtectedEventNums'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectFailedNums  防护失败的数量
    * redundantNums  防护冗余数量
    * unprotectNums  未防护数量
    * protectedNums  已防护数量
    * protectTotalNums  防护资产总数
    * protectedEventNums  防护事件数量
    *
    * @var string[]
    */
    protected static $getters = [
            'protectFailedNums' => 'getProtectFailedNums',
            'redundantNums' => 'getRedundantNums',
            'unprotectNums' => 'getUnprotectNums',
            'protectedNums' => 'getProtectedNums',
            'protectTotalNums' => 'getProtectTotalNums',
            'protectedEventNums' => 'getProtectedEventNums'
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
        $this->container['protectFailedNums'] = isset($data['protectFailedNums']) ? $data['protectFailedNums'] : null;
        $this->container['redundantNums'] = isset($data['redundantNums']) ? $data['redundantNums'] : null;
        $this->container['unprotectNums'] = isset($data['unprotectNums']) ? $data['unprotectNums'] : null;
        $this->container['protectedNums'] = isset($data['protectedNums']) ? $data['protectedNums'] : null;
        $this->container['protectTotalNums'] = isset($data['protectTotalNums']) ? $data['protectTotalNums'] : null;
        $this->container['protectedEventNums'] = isset($data['protectedEventNums']) ? $data['protectedEventNums'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectFailedNums']) && ($this->container['protectFailedNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectFailedNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectFailedNums']) && ($this->container['protectFailedNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectFailedNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['redundantNums']) && ($this->container['redundantNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'redundantNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['redundantNums']) && ($this->container['redundantNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'redundantNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectNums']) && ($this->container['unprotectNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unprotectNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unprotectNums']) && ($this->container['unprotectNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedNums']) && ($this->container['protectedNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedNums']) && ($this->container['protectedNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectTotalNums']) && ($this->container['protectTotalNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectTotalNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectTotalNums']) && ($this->container['protectTotalNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectTotalNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedEventNums']) && ($this->container['protectedEventNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedEventNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedEventNums']) && ($this->container['protectedEventNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedEventNums', must be bigger than or equal to 0.";
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
    * Gets protectFailedNums
    *  防护失败的数量
    *
    * @return int|null
    */
    public function getProtectFailedNums()
    {
        return $this->container['protectFailedNums'];
    }

    /**
    * Sets protectFailedNums
    *
    * @param int|null $protectFailedNums 防护失败的数量
    *
    * @return $this
    */
    public function setProtectFailedNums($protectFailedNums)
    {
        $this->container['protectFailedNums'] = $protectFailedNums;
        return $this;
    }

    /**
    * Gets redundantNums
    *  防护冗余数量
    *
    * @return int|null
    */
    public function getRedundantNums()
    {
        return $this->container['redundantNums'];
    }

    /**
    * Sets redundantNums
    *
    * @param int|null $redundantNums 防护冗余数量
    *
    * @return $this
    */
    public function setRedundantNums($redundantNums)
    {
        $this->container['redundantNums'] = $redundantNums;
        return $this;
    }

    /**
    * Gets unprotectNums
    *  未防护数量
    *
    * @return int|null
    */
    public function getUnprotectNums()
    {
        return $this->container['unprotectNums'];
    }

    /**
    * Sets unprotectNums
    *
    * @param int|null $unprotectNums 未防护数量
    *
    * @return $this
    */
    public function setUnprotectNums($unprotectNums)
    {
        $this->container['unprotectNums'] = $unprotectNums;
        return $this;
    }

    /**
    * Gets protectedNums
    *  已防护数量
    *
    * @return int|null
    */
    public function getProtectedNums()
    {
        return $this->container['protectedNums'];
    }

    /**
    * Sets protectedNums
    *
    * @param int|null $protectedNums 已防护数量
    *
    * @return $this
    */
    public function setProtectedNums($protectedNums)
    {
        $this->container['protectedNums'] = $protectedNums;
        return $this;
    }

    /**
    * Gets protectTotalNums
    *  防护资产总数
    *
    * @return int|null
    */
    public function getProtectTotalNums()
    {
        return $this->container['protectTotalNums'];
    }

    /**
    * Sets protectTotalNums
    *
    * @param int|null $protectTotalNums 防护资产总数
    *
    * @return $this
    */
    public function setProtectTotalNums($protectTotalNums)
    {
        $this->container['protectTotalNums'] = $protectTotalNums;
        return $this;
    }

    /**
    * Gets protectedEventNums
    *  防护事件数量
    *
    * @return int|null
    */
    public function getProtectedEventNums()
    {
        return $this->container['protectedEventNums'];
    }

    /**
    * Sets protectedEventNums
    *
    * @param int|null $protectedEventNums 防护事件数量
    *
    * @return $this
    */
    public function setProtectedEventNums($protectedEventNums)
    {
        $this->container['protectedEventNums'] = $protectedEventNums;
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

