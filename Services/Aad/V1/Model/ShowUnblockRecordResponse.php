<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUnblockRecordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUnblockRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unblockRecord  解封记录
    * total  总数
    * domainId  租户id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unblockRecord' => '\HuaweiCloud\SDK\Aad\V1\Model\UnblockRecordResponseUnblockRecord[]',
            'total' => 'int',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unblockRecord  解封记录
    * total  总数
    * domainId  租户id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unblockRecord' => null,
        'total' => 'int32',
        'domainId' => null
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
    * unblockRecord  解封记录
    * total  总数
    * domainId  租户id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unblockRecord' => 'unblock_record',
            'total' => 'total',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unblockRecord  解封记录
    * total  总数
    * domainId  租户id
    *
    * @var string[]
    */
    protected static $setters = [
            'unblockRecord' => 'setUnblockRecord',
            'total' => 'setTotal',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unblockRecord  解封记录
    * total  总数
    * domainId  租户id
    *
    * @var string[]
    */
    protected static $getters = [
            'unblockRecord' => 'getUnblockRecord',
            'total' => 'getTotal',
            'domainId' => 'getDomainId'
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
        $this->container['unblockRecord'] = isset($data['unblockRecord']) ? $data['unblockRecord'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 2000)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 1)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
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
    * Gets unblockRecord
    *  解封记录
    *
    * @return \HuaweiCloud\SDK\Aad\V1\Model\UnblockRecordResponseUnblockRecord[]|null
    */
    public function getUnblockRecord()
    {
        return $this->container['unblockRecord'];
    }

    /**
    * Sets unblockRecord
    *
    * @param \HuaweiCloud\SDK\Aad\V1\Model\UnblockRecordResponseUnblockRecord[]|null $unblockRecord 解封记录
    *
    * @return $this
    */
    public function setUnblockRecord($unblockRecord)
    {
        $this->container['unblockRecord'] = $unblockRecord;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

