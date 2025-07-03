<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessAkskVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessAkskVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ak/sk的id。
    * gmtCreate  ak/sk的生成时间。
    * gmtModify  ak/sk的修改时间。
    * innerDomainId  内部租户id。
    * ak  生成的ak。
    * sk  生成的sk。
    * status  ak/sk的状态。
    * descp  ak/sk的描述信息。
    * gmtCreateTimestamp  ak/sk的生成时间戳。
    * gmtModifyTimestamp  ak/sk的修改时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => 'string',
            'gmtModify' => 'string',
            'innerDomainId' => 'int',
            'ak' => 'string',
            'sk' => 'string',
            'status' => 'string',
            'descp' => 'string',
            'gmtCreateTimestamp' => 'int',
            'gmtModifyTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ak/sk的id。
    * gmtCreate  ak/sk的生成时间。
    * gmtModify  ak/sk的修改时间。
    * innerDomainId  内部租户id。
    * ak  生成的ak。
    * sk  生成的sk。
    * status  ak/sk的状态。
    * descp  ak/sk的描述信息。
    * gmtCreateTimestamp  ak/sk的生成时间戳。
    * gmtModifyTimestamp  ak/sk的修改时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'gmtCreate' => null,
        'gmtModify' => null,
        'innerDomainId' => 'int32',
        'ak' => null,
        'sk' => null,
        'status' => null,
        'descp' => null,
        'gmtCreateTimestamp' => 'int64',
        'gmtModifyTimestamp' => 'int64'
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
    * id  ak/sk的id。
    * gmtCreate  ak/sk的生成时间。
    * gmtModify  ak/sk的修改时间。
    * innerDomainId  内部租户id。
    * ak  生成的ak。
    * sk  生成的sk。
    * status  ak/sk的状态。
    * descp  ak/sk的描述信息。
    * gmtCreateTimestamp  ak/sk的生成时间戳。
    * gmtModifyTimestamp  ak/sk的修改时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'innerDomainId' => 'inner_domain_id',
            'ak' => 'ak',
            'sk' => 'sk',
            'status' => 'status',
            'descp' => 'descp',
            'gmtCreateTimestamp' => 'gmt_create_timestamp',
            'gmtModifyTimestamp' => 'gmt_modify_timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ak/sk的id。
    * gmtCreate  ak/sk的生成时间。
    * gmtModify  ak/sk的修改时间。
    * innerDomainId  内部租户id。
    * ak  生成的ak。
    * sk  生成的sk。
    * status  ak/sk的状态。
    * descp  ak/sk的描述信息。
    * gmtCreateTimestamp  ak/sk的生成时间戳。
    * gmtModifyTimestamp  ak/sk的修改时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'innerDomainId' => 'setInnerDomainId',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'status' => 'setStatus',
            'descp' => 'setDescp',
            'gmtCreateTimestamp' => 'setGmtCreateTimestamp',
            'gmtModifyTimestamp' => 'setGmtModifyTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ak/sk的id。
    * gmtCreate  ak/sk的生成时间。
    * gmtModify  ak/sk的修改时间。
    * innerDomainId  内部租户id。
    * ak  生成的ak。
    * sk  生成的sk。
    * status  ak/sk的状态。
    * descp  ak/sk的描述信息。
    * gmtCreateTimestamp  ak/sk的生成时间戳。
    * gmtModifyTimestamp  ak/sk的修改时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'innerDomainId' => 'getInnerDomainId',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'status' => 'getStatus',
            'descp' => 'getDescp',
            'gmtCreateTimestamp' => 'getGmtCreateTimestamp',
            'gmtModifyTimestamp' => 'getGmtModifyTimestamp'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['descp'] = isset($data['descp']) ? $data['descp'] : null;
        $this->container['gmtCreateTimestamp'] = isset($data['gmtCreateTimestamp']) ? $data['gmtCreateTimestamp'] : null;
        $this->container['gmtModifyTimestamp'] = isset($data['gmtModifyTimestamp']) ? $data['gmtModifyTimestamp'] : null;
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
    * Gets id
    *  ak/sk的id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id ak/sk的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  ak/sk的生成时间。
    *
    * @return string|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param string|null $gmtCreate ak/sk的生成时间。
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets gmtModify
    *  ak/sk的修改时间。
    *
    * @return string|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param string|null $gmtModify ak/sk的修改时间。
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
        return $this;
    }

    /**
    * Gets innerDomainId
    *  内部租户id。
    *
    * @return int|null
    */
    public function getInnerDomainId()
    {
        return $this->container['innerDomainId'];
    }

    /**
    * Sets innerDomainId
    *
    * @param int|null $innerDomainId 内部租户id。
    *
    * @return $this
    */
    public function setInnerDomainId($innerDomainId)
    {
        $this->container['innerDomainId'] = $innerDomainId;
        return $this;
    }

    /**
    * Gets ak
    *  生成的ak。
    *
    * @return string|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string|null $ak 生成的ak。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  生成的sk。
    *
    * @return string|null
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string|null $sk 生成的sk。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
        return $this;
    }

    /**
    * Gets status
    *  ak/sk的状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status ak/sk的状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets descp
    *  ak/sk的描述信息。
    *
    * @return string|null
    */
    public function getDescp()
    {
        return $this->container['descp'];
    }

    /**
    * Sets descp
    *
    * @param string|null $descp ak/sk的描述信息。
    *
    * @return $this
    */
    public function setDescp($descp)
    {
        $this->container['descp'] = $descp;
        return $this;
    }

    /**
    * Gets gmtCreateTimestamp
    *  ak/sk的生成时间戳。
    *
    * @return int|null
    */
    public function getGmtCreateTimestamp()
    {
        return $this->container['gmtCreateTimestamp'];
    }

    /**
    * Sets gmtCreateTimestamp
    *
    * @param int|null $gmtCreateTimestamp ak/sk的生成时间戳。
    *
    * @return $this
    */
    public function setGmtCreateTimestamp($gmtCreateTimestamp)
    {
        $this->container['gmtCreateTimestamp'] = $gmtCreateTimestamp;
        return $this;
    }

    /**
    * Gets gmtModifyTimestamp
    *  ak/sk的修改时间戳。
    *
    * @return int|null
    */
    public function getGmtModifyTimestamp()
    {
        return $this->container['gmtModifyTimestamp'];
    }

    /**
    * Sets gmtModifyTimestamp
    *
    * @param int|null $gmtModifyTimestamp ak/sk的修改时间戳。
    *
    * @return $this
    */
    public function setGmtModifyTimestamp($gmtModifyTimestamp)
    {
        $this->container['gmtModifyTimestamp'] = $gmtModifyTimestamp;
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

