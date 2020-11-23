<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'idpId' => 'string',
            'entityId' => 'string',
            'protocolId' => 'string',
            'domainId' => 'string',
            'xaccountType' => 'string',
            'updateTime' => 'string',
            'data' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'idpId' => null,
        'entityId' => null,
        'protocolId' => null,
        'domainId' => null,
        'xaccountType' => null,
        'updateTime' => null,
        'data' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'idpId' => 'idp_id',
            'entityId' => 'entity_id',
            'protocolId' => 'protocol_id',
            'domainId' => 'domain_id',
            'xaccountType' => 'xaccount_type',
            'updateTime' => 'update_time',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'idpId' => 'setIdpId',
            'entityId' => 'setEntityId',
            'protocolId' => 'setProtocolId',
            'domainId' => 'setDomainId',
            'xaccountType' => 'setXaccountType',
            'updateTime' => 'setUpdateTime',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'idpId' => 'getIdpId',
            'entityId' => 'getEntityId',
            'protocolId' => 'getProtocolId',
            'domainId' => 'getDomainId',
            'xaccountType' => 'getXaccountType',
            'updateTime' => 'getUpdateTime',
            'data' => 'getData'
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
        $this->container['idpId'] = isset($data['idpId']) ? $data['idpId'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['protocolId'] = isset($data['protocolId']) ? $data['protocolId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id Metadata的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets idpId
    *
    * @return string|null
    */
    public function getIdpId()
    {
        return $this->container['idpId'];
    }

    /**
    * Sets idpId
    *
    * @param string|null $idpId 身份提供商ID。
    *
    * @return $this
    */
    public function setIdpId($idpId)
    {
        $this->container['idpId'] = $idpId;
        return $this;
    }

    /**
    * Gets entityId
    *
    * @return string|null
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string|null $entityId Metadata文件中的entityID字段。
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets protocolId
    *
    * @return string|null
    */
    public function getProtocolId()
    {
        return $this->container['protocolId'];
    }

    /**
    * Sets protocolId
    *
    * @param string|null $protocolId 协议ID。
    *
    * @return $this
    */
    public function setProtocolId($protocolId)
    {
        $this->container['protocolId'] = $protocolId;
        return $this;
    }

    /**
    * Gets domainId
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
    * @param string|null $domainId 用户所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets xaccountType
    *
    * @return string|null
    */
    public function getXaccountType()
    {
        return $this->container['xaccountType'];
    }

    /**
    * Sets xaccountType
    *
    * @param string|null $xaccountType 账号来源，默认为空。
    *
    * @return $this
    */
    public function setXaccountType($xaccountType)
    {
        $this->container['xaccountType'] = $xaccountType;
        return $this;
    }

    /**
    * Gets updateTime
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 导入或更新Metadata文件的时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets data
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data Metadata文件的内容。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

