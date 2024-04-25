<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataWareHouseDTODwConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataWareHouseDTO_dw_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    * fgacConnStatus  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    * fgacConnTestTime  最近一次连通性测试时间
    * fgacConnTestError  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fgacFlag' => 'bool',
            'fgacType' => 'string',
            'fgacConnStatus' => 'string',
            'fgacConnTestTime' => 'int',
            'fgacConnTestError' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    * fgacConnStatus  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    * fgacConnTestTime  最近一次连通性测试时间
    * fgacConnTestError  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fgacFlag' => null,
        'fgacType' => null,
        'fgacConnStatus' => null,
        'fgacConnTestTime' => 'int64',
        'fgacConnTestError' => null
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
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    * fgacConnStatus  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    * fgacConnTestTime  最近一次连通性测试时间
    * fgacConnTestError  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fgacFlag' => 'fgac_flag',
            'fgacType' => 'fgac_type',
            'fgacConnStatus' => 'fgac_conn_status',
            'fgacConnTestTime' => 'fgac_conn_test_time',
            'fgacConnTestError' => 'fgac_conn_test_error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    * fgacConnStatus  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    * fgacConnTestTime  最近一次连通性测试时间
    * fgacConnTestError  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @var string[]
    */
    protected static $setters = [
            'fgacFlag' => 'setFgacFlag',
            'fgacType' => 'setFgacType',
            'fgacConnStatus' => 'setFgacConnStatus',
            'fgacConnTestTime' => 'setFgacConnTestTime',
            'fgacConnTestError' => 'setFgacConnTestError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    * fgacConnStatus  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    * fgacConnTestTime  最近一次连通性测试时间
    * fgacConnTestError  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @var string[]
    */
    protected static $getters = [
            'fgacFlag' => 'getFgacFlag',
            'fgacType' => 'getFgacType',
            'fgacConnStatus' => 'getFgacConnStatus',
            'fgacConnTestTime' => 'getFgacConnTestTime',
            'fgacConnTestError' => 'getFgacConnTestError'
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
    const FGAC_CONN_STATUS_UNKNOWN = 'UNKNOWN';
    const FGAC_CONN_STATUS_TESTING = 'TESTING';
    const FGAC_CONN_STATUS_SUCCESS = 'SUCCESS';
    const FGAC_CONN_STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFgacConnStatusAllowableValues()
    {
        return [
            self::FGAC_CONN_STATUS_UNKNOWN,
            self::FGAC_CONN_STATUS_TESTING,
            self::FGAC_CONN_STATUS_SUCCESS,
            self::FGAC_CONN_STATUS_FAILED,
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
        $this->container['fgacFlag'] = isset($data['fgacFlag']) ? $data['fgacFlag'] : null;
        $this->container['fgacType'] = isset($data['fgacType']) ? $data['fgacType'] : null;
        $this->container['fgacConnStatus'] = isset($data['fgacConnStatus']) ? $data['fgacConnStatus'] : null;
        $this->container['fgacConnTestTime'] = isset($data['fgacConnTestTime']) ? $data['fgacConnTestTime'] : null;
        $this->container['fgacConnTestError'] = isset($data['fgacConnTestError']) ? $data['fgacConnTestError'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fgacType']) && (mb_strlen($this->container['fgacType']) > 1)) {
                $invalidProperties[] = "invalid value for 'fgacType', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['fgacType']) && (mb_strlen($this->container['fgacType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fgacType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getFgacConnStatusAllowableValues();
                if (!is_null($this->container['fgacConnStatus']) && !in_array($this->container['fgacConnStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fgacConnStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['fgacConnTestTime']) && ($this->container['fgacConnTestTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'fgacConnTestTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['fgacConnTestTime']) && ($this->container['fgacConnTestTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fgacConnTestTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fgacConnTestError']) && (mb_strlen($this->container['fgacConnTestError']) > 10240)) {
                $invalidProperties[] = "invalid value for 'fgacConnTestError', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['fgacConnTestError']) && (mb_strlen($this->container['fgacConnTestError']) < 0)) {
                $invalidProperties[] = "invalid value for 'fgacConnTestError', the character length must be bigger than or equal to 0.";
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
    * Gets fgacFlag
    *  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    *
    * @return bool|null
    */
    public function getFgacFlag()
    {
        return $this->container['fgacFlag'];
    }

    /**
    * Sets fgacFlag
    *
    * @param bool|null $fgacFlag 是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    *
    * @return $this
    */
    public function setFgacFlag($fgacFlag)
    {
        $this->container['fgacFlag'] = $fgacFlag;
        return $this;
    }

    /**
    * Gets fgacType
    *  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @return string|null
    */
    public function getFgacType()
    {
        return $this->container['fgacType'];
    }

    /**
    * Sets fgacType
    *
    * @param string|null $fgacType 细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @return $this
    */
    public function setFgacType($fgacType)
    {
        $this->container['fgacType'] = $fgacType;
        return $this;
    }

    /**
    * Gets fgacConnStatus
    *  数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    *
    * @return string|null
    */
    public function getFgacConnStatus()
    {
        return $this->container['fgacConnStatus'];
    }

    /**
    * Sets fgacConnStatus
    *
    * @param string|null $fgacConnStatus 数据源连通性测试状态：   * UNKNOWN - 连通性未测试   * TESTING - 连通性测试中   * SUCCESS - 连通性测试成功   * FAILED - 连通性测试失败
    *
    * @return $this
    */
    public function setFgacConnStatus($fgacConnStatus)
    {
        $this->container['fgacConnStatus'] = $fgacConnStatus;
        return $this;
    }

    /**
    * Gets fgacConnTestTime
    *  最近一次连通性测试时间
    *
    * @return int|null
    */
    public function getFgacConnTestTime()
    {
        return $this->container['fgacConnTestTime'];
    }

    /**
    * Sets fgacConnTestTime
    *
    * @param int|null $fgacConnTestTime 最近一次连通性测试时间
    *
    * @return $this
    */
    public function setFgacConnTestTime($fgacConnTestTime)
    {
        $this->container['fgacConnTestTime'] = $fgacConnTestTime;
        return $this;
    }

    /**
    * Gets fgacConnTestError
    *  联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @return string|null
    */
    public function getFgacConnTestError()
    {
        return $this->container['fgacConnTestError'];
    }

    /**
    * Sets fgacConnTestError
    *
    * @param string|null $fgacConnTestError 联通性测试失败信息，如果连通性测试成功或者未测试联通性，失败信息为空字符串
    *
    * @return $this
    */
    public function setFgacConnTestError($fgacConnTestError)
    {
        $this->container['fgacConnTestError'] = $fgacConnTestError;
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

