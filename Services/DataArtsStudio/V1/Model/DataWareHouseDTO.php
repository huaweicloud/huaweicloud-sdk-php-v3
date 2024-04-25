<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataWareHouseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataWareHouseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwId  数据连接ID
    * dwName  数据连接名称
    * dwType  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    * dwConfig  dwConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwId' => 'string',
            'dwName' => 'string',
            'dwType' => 'string',
            'dwConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataWareHouseDTODwConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwId  数据连接ID
    * dwName  数据连接名称
    * dwType  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    * dwConfig  dwConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwId' => null,
        'dwName' => null,
        'dwType' => null,
        'dwConfig' => null
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
    * dwId  数据连接ID
    * dwName  数据连接名称
    * dwType  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    * dwConfig  dwConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwId' => 'dw_id',
            'dwName' => 'dw_name',
            'dwType' => 'dw_type',
            'dwConfig' => 'dw_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwId  数据连接ID
    * dwName  数据连接名称
    * dwType  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    * dwConfig  dwConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'dwId' => 'setDwId',
            'dwName' => 'setDwName',
            'dwType' => 'setDwType',
            'dwConfig' => 'setDwConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwId  数据连接ID
    * dwName  数据连接名称
    * dwType  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    * dwConfig  dwConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'dwId' => 'getDwId',
            'dwName' => 'getDwName',
            'dwType' => 'getDwType',
            'dwConfig' => 'getDwConfig'
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
    const DW_TYPE_HIVE = 'HIVE';
    const DW_TYPE_DWS = 'DWS';
    const DW_TYPE_SPARK = 'SPARK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDwTypeAllowableValues()
    {
        return [
            self::DW_TYPE_HIVE,
            self::DW_TYPE_DWS,
            self::DW_TYPE_SPARK,
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
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['dwConfig'] = isset($data['dwConfig']) ? $data['dwConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 100)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) > 100)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDwTypeAllowableValues();
                if (!is_null($this->container['dwType']) && !in_array($this->container['dwType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dwType', must be one of '%s'",
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
    * Gets dwId
    *  数据连接ID
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接ID
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets dwName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名称
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型：   * HIVE数据源   * DWS数据源   * SPARK数据源
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets dwConfig
    *  dwConfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataWareHouseDTODwConfig|null
    */
    public function getDwConfig()
    {
        return $this->container['dwConfig'];
    }

    /**
    * Sets dwConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataWareHouseDTODwConfig|null $dwConfig dwConfig
    *
    * @return $this
    */
    public function setDwConfig($dwConfig)
    {
        $this->container['dwConfig'] = $dwConfig;
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

