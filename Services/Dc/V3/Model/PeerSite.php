<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeerSite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeerSite';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gatewayId  对端网关的ID
    * linkId  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
    * regionId  对端网关所在的Region
    * siteCode  专线全域接入网关对应的站点位置
    * projectId  对等体站点的项目ID
    * type  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gatewayId' => 'string',
            'linkId' => 'string',
            'regionId' => 'string',
            'siteCode' => 'string',
            'projectId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gatewayId  对端网关的ID
    * linkId  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
    * regionId  对端网关所在的Region
    * siteCode  专线全域接入网关对应的站点位置
    * projectId  对等体站点的项目ID
    * type  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gatewayId' => null,
        'linkId' => null,
        'regionId' => null,
        'siteCode' => null,
        'projectId' => null,
        'type' => null
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
    * gatewayId  对端网关的ID
    * linkId  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
    * regionId  对端网关所在的Region
    * siteCode  专线全域接入网关对应的站点位置
    * projectId  对等体站点的项目ID
    * type  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gatewayId' => 'gateway_id',
            'linkId' => 'link_id',
            'regionId' => 'region_id',
            'siteCode' => 'site_code',
            'projectId' => 'project_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gatewayId  对端网关的ID
    * linkId  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
    * regionId  对端网关所在的Region
    * siteCode  专线全域接入网关对应的站点位置
    * projectId  对等体站点的项目ID
    * type  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @var string[]
    */
    protected static $setters = [
            'gatewayId' => 'setGatewayId',
            'linkId' => 'setLinkId',
            'regionId' => 'setRegionId',
            'siteCode' => 'setSiteCode',
            'projectId' => 'setProjectId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gatewayId  对端网关的ID
    * linkId  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
    * regionId  对端网关所在的Region
    * siteCode  专线全域接入网关对应的站点位置
    * projectId  对等体站点的项目ID
    * type  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @var string[]
    */
    protected static $getters = [
            'gatewayId' => 'getGatewayId',
            'linkId' => 'getLinkId',
            'regionId' => 'getRegionId',
            'siteCode' => 'getSiteCode',
            'projectId' => 'getProjectId',
            'type' => 'getType'
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
    const TYPE_ER = 'ER';
    const TYPE_GDGW = 'GDGW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ER,
            self::TYPE_GDGW,
        ];
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
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) < 0)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['linkId']) && (mb_strlen($this->container['linkId']) > 64)) {
                $invalidProperties[] = "invalid value for 'linkId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['linkId']) && (mb_strlen($this->container['linkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'linkId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets gatewayId
    *  对端网关的ID
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
    * @param string|null $gatewayId 对端网关的ID
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
    *  对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
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
    * @param string|null $linkId 对端网关连接的ID(如：对端为ER时为attachment ID,对端为GDGW时为对端的PeerLink Id)
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
    *  对端网关所在的Region
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
    * @param string|null $regionId 对端网关所在的Region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets siteCode
    *  专线全域接入网关对应的站点位置
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
    * @param string|null $siteCode 专线全域接入网关对应的站点位置
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets projectId
    *  对等体站点的项目ID
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
    * @param string|null $projectId 对等体站点的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
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
    * @param string|null $type 对等体的类型 - ER 企业路由器 - GDGW 全域接入网关
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

