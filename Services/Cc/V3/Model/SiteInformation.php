<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SiteInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SiteInformation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * gatewayType  gatewayType
    * gatewayId  网关的ID。
    * siteCode  站点编码。
    * asn  网络实例BGP协议的AS号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'projectId' => 'string',
            'gatewayType' => '\HuaweiCloud\SDK\Cc\V3\Model\GatewayTypeEnum',
            'gatewayId' => 'string',
            'siteCode' => 'string',
            'asn' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * gatewayType  gatewayType
    * gatewayId  网关的ID。
    * siteCode  站点编码。
    * asn  网络实例BGP协议的AS号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'projectId' => null,
        'gatewayType' => null,
        'gatewayId' => null,
        'siteCode' => null,
        'asn' => 'int64'
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
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * gatewayType  gatewayType
    * gatewayId  网关的ID。
    * siteCode  站点编码。
    * asn  网络实例BGP协议的AS号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'gatewayType' => 'gateway_type',
            'gatewayId' => 'gateway_id',
            'siteCode' => 'site_code',
            'asn' => 'asn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * gatewayType  gatewayType
    * gatewayId  网关的ID。
    * siteCode  站点编码。
    * asn  网络实例BGP协议的AS号。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'gatewayType' => 'setGatewayType',
            'gatewayId' => 'setGatewayId',
            'siteCode' => 'setSiteCode',
            'asn' => 'setAsn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * gatewayType  gatewayType
    * gatewayId  网关的ID。
    * siteCode  站点编码。
    * asn  网络实例BGP协议的AS号。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'gatewayType' => 'getGatewayType',
            'gatewayId' => 'getGatewayId',
            'siteCode' => 'getSiteCode',
            'asn' => 'getAsn'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['gatewayType'] = isset($data['gatewayType']) ? $data['gatewayType'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['gatewayType'] === null) {
            $invalidProperties[] = "'gatewayType' can't be null";
        }
        if ($this->container['gatewayId'] === null) {
            $invalidProperties[] = "'gatewayId' can't be null";
        }
            if ((mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['gatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['gatewayId'])) {
                $invalidProperties[] = "invalid value for 'gatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['siteCode'] === null) {
            $invalidProperties[] = "'siteCode' can't be null";
        }
            if ((mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['siteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['siteCode'])) {
                $invalidProperties[] = "invalid value for 'siteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
            }
        if ($this->container['asn'] === null) {
            $invalidProperties[] = "'asn' can't be null";
        }
            if (($this->container['asn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'asn', must be smaller than or equal to 4294967295.";
            }
            if (($this->container['asn'] < 0)) {
                $invalidProperties[] = "invalid value for 'asn', must be bigger than or equal to 0.";
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
    * Gets regionId
    *  RegionID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId RegionID。
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
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets gatewayType
    *  gatewayType
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GatewayTypeEnum
    */
    public function getGatewayType()
    {
        return $this->container['gatewayType'];
    }

    /**
    * Sets gatewayType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GatewayTypeEnum $gatewayType gatewayType
    *
    * @return $this
    */
    public function setGatewayType($gatewayType)
    {
        $this->container['gatewayType'] = $gatewayType;
        return $this;
    }

    /**
    * Gets gatewayId
    *  网关的ID。
    *
    * @return string
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string $gatewayId 网关的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets siteCode
    *  站点编码。
    *
    * @return string
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string $siteCode 站点编码。
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets asn
    *  网络实例BGP协议的AS号。
    *
    * @return int
    */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
    * Sets asn
    *
    * @param int $asn 网络实例BGP协议的AS号。
    *
    * @return $this
    */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;
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

