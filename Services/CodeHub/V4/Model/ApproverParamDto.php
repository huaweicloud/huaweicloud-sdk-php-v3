<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproverParamDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproverParamDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approverId  审核人id
    * codeOwner  代码所有者
    * accept  是否接纳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approverId' => 'int',
            'codeOwner' => 'bool',
            'accept' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approverId  审核人id
    * codeOwner  代码所有者
    * accept  是否接纳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approverId' => 'int32',
        'codeOwner' => null,
        'accept' => null
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
    * approverId  审核人id
    * codeOwner  代码所有者
    * accept  是否接纳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approverId' => 'approver_id',
            'codeOwner' => 'code_owner',
            'accept' => 'accept'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approverId  审核人id
    * codeOwner  代码所有者
    * accept  是否接纳
    *
    * @var string[]
    */
    protected static $setters = [
            'approverId' => 'setApproverId',
            'codeOwner' => 'setCodeOwner',
            'accept' => 'setAccept'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approverId  审核人id
    * codeOwner  代码所有者
    * accept  是否接纳
    *
    * @var string[]
    */
    protected static $getters = [
            'approverId' => 'getApproverId',
            'codeOwner' => 'getCodeOwner',
            'accept' => 'getAccept'
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
        $this->container['approverId'] = isset($data['approverId']) ? $data['approverId'] : null;
        $this->container['codeOwner'] = isset($data['codeOwner']) ? $data['codeOwner'] : null;
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets approverId
    *  审核人id
    *
    * @return int|null
    */
    public function getApproverId()
    {
        return $this->container['approverId'];
    }

    /**
    * Sets approverId
    *
    * @param int|null $approverId 审核人id
    *
    * @return $this
    */
    public function setApproverId($approverId)
    {
        $this->container['approverId'] = $approverId;
        return $this;
    }

    /**
    * Gets codeOwner
    *  代码所有者
    *
    * @return bool|null
    */
    public function getCodeOwner()
    {
        return $this->container['codeOwner'];
    }

    /**
    * Sets codeOwner
    *
    * @param bool|null $codeOwner 代码所有者
    *
    * @return $this
    */
    public function setCodeOwner($codeOwner)
    {
        $this->container['codeOwner'] = $codeOwner;
        return $this;
    }

    /**
    * Gets accept
    *  是否接纳
    *
    * @return bool|null
    */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
    * Sets accept
    *
    * @param bool|null $accept 是否接纳
    *
    * @return $this
    */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;
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

