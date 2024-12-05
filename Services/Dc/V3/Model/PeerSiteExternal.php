<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeerSiteExternal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeerSiteExternal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型
    * gatewayId  网关ID
    * linkId  连接ID
    * regionId  局点ID
    * projectId  项目ID
    * siteCode  站点编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'gatewayId' => 'string',
            'linkId' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'siteCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型
    * gatewayId  网关ID
    * linkId  连接ID
    * regionId  局点ID
    * projectId  项目ID
    * siteCode  站点编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'gatewayId' => null,
        'linkId' => null,
        'regionId' => null,
        'projectId' => null,
        'siteCode' => null
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
    * type  类型
    * gatewayId  网关ID
    * linkId  连接ID
    * regionId  局点ID
    * projectId  项目ID
    * siteCode  站点编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'gatewayId' => 'gateway_id',
            'linkId' => 'link_id',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'siteCode' => 'site_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型
    * gatewayId  网关ID
    * linkId  连接ID
    * regionId  局点ID
    * projectId  项目ID
    * siteCode  站点编码
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'gatewayId' => 'setGatewayId',
            'linkId' => 'setLinkId',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'siteCode' => 'setSiteCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型
    * gatewayId  网关ID
    * linkId  连接ID
    * regionId  局点ID
    * projectId  项目ID
    * siteCode  站点编码
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'gatewayId' => 'getGatewayId',
            'linkId' => 'getLinkId',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'siteCode' => 'getSiteCode'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
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
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets gatewayId
    *  网关ID
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 网关ID
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets linkId
    *  连接ID
    *
    * @return string|null
    */
    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    /**
    * Sets linkId
    *
    * @param string|null $linkId 连接ID
    *
    * @return $this
    */
    public function setLinkId($linkId)
    {
        $this->container['linkId'] = $linkId;
        return $this;
    }

    /**
    * Gets regionId
    *  局点ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 局点ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets siteCode
    *  站点编码
    *
    * @return string|null
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string|null $siteCode 站点编码
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
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

