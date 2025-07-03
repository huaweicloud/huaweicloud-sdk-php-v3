<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBusinessModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBusinessModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名字
    * epsId  企业项目ID，默认值为“0”，表示默认项目的ID。
    * displayName  CMDB树显示的名称
    * descp  描述
    * cmdbDatasourceType  默认值为SKYWALKING。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'epsId' => 'string',
            'displayName' => 'string',
            'descp' => 'string',
            'cmdbDatasourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名字
    * epsId  企业项目ID，默认值为“0”，表示默认项目的ID。
    * displayName  CMDB树显示的名称
    * descp  描述
    * cmdbDatasourceType  默认值为SKYWALKING。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'epsId' => null,
        'displayName' => null,
        'descp' => null,
        'cmdbDatasourceType' => null
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
    * name  应用名字
    * epsId  企业项目ID，默认值为“0”，表示默认项目的ID。
    * displayName  CMDB树显示的名称
    * descp  描述
    * cmdbDatasourceType  默认值为SKYWALKING。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'epsId' => 'eps_id',
            'displayName' => 'display_name',
            'descp' => 'descp',
            'cmdbDatasourceType' => 'cmdb_datasource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名字
    * epsId  企业项目ID，默认值为“0”，表示默认项目的ID。
    * displayName  CMDB树显示的名称
    * descp  描述
    * cmdbDatasourceType  默认值为SKYWALKING。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'epsId' => 'setEpsId',
            'displayName' => 'setDisplayName',
            'descp' => 'setDescp',
            'cmdbDatasourceType' => 'setCmdbDatasourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名字
    * epsId  企业项目ID，默认值为“0”，表示默认项目的ID。
    * displayName  CMDB树显示的名称
    * descp  描述
    * cmdbDatasourceType  默认值为SKYWALKING。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'epsId' => 'getEpsId',
            'displayName' => 'getDisplayName',
            'descp' => 'getDescp',
            'cmdbDatasourceType' => 'getCmdbDatasourceType'
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
    const CMDB_DATASOURCE_TYPE_OTEL = 'OTEL';
    const CMDB_DATASOURCE_TYPE_SKYWALKING = 'SKYWALKING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCmdbDatasourceTypeAllowableValues()
    {
        return [
            self::CMDB_DATASOURCE_TYPE_OTEL,
            self::CMDB_DATASOURCE_TYPE_SKYWALKING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['descp'] = isset($data['descp']) ? $data['descp'] : null;
        $this->container['cmdbDatasourceType'] = isset($data['cmdbDatasourceType']) ? $data['cmdbDatasourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['descp'] === null) {
            $invalidProperties[] = "'descp' can't be null";
        }
            $allowedValues = $this->getCmdbDatasourceTypeAllowableValues();
                if (!is_null($this->container['cmdbDatasourceType']) && !in_array($this->container['cmdbDatasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cmdbDatasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  应用名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 应用名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目ID，默认值为“0”，表示默认项目的ID。
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目ID，默认值为“0”，表示默认项目的ID。
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets displayName
    *  CMDB树显示的名称
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName CMDB树显示的名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets descp
    *  描述
    *
    * @return string
    */
    public function getDescp()
    {
        return $this->container['descp'];
    }

    /**
    * Sets descp
    *
    * @param string $descp 描述
    *
    * @return $this
    */
    public function setDescp($descp)
    {
        $this->container['descp'] = $descp;
        return $this;
    }

    /**
    * Gets cmdbDatasourceType
    *  默认值为SKYWALKING。
    *
    * @return string|null
    */
    public function getCmdbDatasourceType()
    {
        return $this->container['cmdbDatasourceType'];
    }

    /**
    * Sets cmdbDatasourceType
    *
    * @param string|null $cmdbDatasourceType 默认值为SKYWALKING。
    *
    * @return $this
    */
    public function setCmdbDatasourceType($cmdbDatasourceType)
    {
        $this->container['cmdbDatasourceType'] = $cmdbDatasourceType;
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

