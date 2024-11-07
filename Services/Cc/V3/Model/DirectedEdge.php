<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectedEdge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectedEdge';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * regionId  RegionID。
    * gatewayId  实例ID。
    * gatewayType  gatewayType
    * siteCode  站点编码定义
    * projectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'regionId' => 'string',
            'gatewayId' => 'string',
            'gatewayType' => '\HuaweiCloud\SDK\Cc\V3\Model\GatewayTypeEnum',
            'siteCode' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * regionId  RegionID。
    * gatewayId  实例ID。
    * gatewayType  gatewayType
    * siteCode  站点编码定义
    * projectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'regionId' => null,
        'gatewayId' => null,
        'gatewayType' => null,
        'siteCode' => null,
        'projectId' => null
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
    * id  实例ID。
    * regionId  RegionID。
    * gatewayId  实例ID。
    * gatewayType  gatewayType
    * siteCode  站点编码定义
    * projectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'regionId' => 'region_id',
            'gatewayId' => 'gateway_id',
            'gatewayType' => 'gateway_type',
            'siteCode' => 'site_code',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * regionId  RegionID。
    * gatewayId  实例ID。
    * gatewayType  gatewayType
    * siteCode  站点编码定义
    * projectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'regionId' => 'setRegionId',
            'gatewayId' => 'setGatewayId',
            'gatewayType' => 'setGatewayType',
            'siteCode' => 'setSiteCode',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * regionId  RegionID。
    * gatewayId  实例ID。
    * gatewayType  gatewayType
    * siteCode  站点编码定义
    * projectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'regionId' => 'getRegionId',
            'gatewayId' => 'getGatewayId',
            'gatewayType' => 'getGatewayType',
            'siteCode' => 'getSiteCode',
            'projectId' => 'getProjectId'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['gatewayType'] = isset($data['gatewayType']) ? $data['gatewayType'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
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
        if ($this->container['gatewayType'] === null) {
            $invalidProperties[] = "'gatewayType' can't be null";
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
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets gatewayId
    *  实例ID。
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
    * @param string $gatewayId 实例ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
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
    * Gets siteCode
    *  站点编码定义
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
    * @param string $siteCode 站点编码定义
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

