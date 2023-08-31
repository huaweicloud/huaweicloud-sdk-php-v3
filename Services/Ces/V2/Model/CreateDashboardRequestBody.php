<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDashboardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDashboardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardName  自定义监控面板名称
    * enterpriseId  企业项目Id
    * dashboardId  监控面板id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardName' => 'string',
            'enterpriseId' => 'string',
            'dashboardId' => 'string',
            'rowWidgetNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardName  自定义监控面板名称
    * enterpriseId  企业项目Id
    * dashboardId  监控面板id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardName' => null,
        'enterpriseId' => null,
        'dashboardId' => null,
        'rowWidgetNum' => null
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
    * dashboardName  自定义监控面板名称
    * enterpriseId  企业项目Id
    * dashboardId  监控面板id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardName' => 'dashboard_name',
            'enterpriseId' => 'enterprise_id',
            'dashboardId' => 'dashboard_id',
            'rowWidgetNum' => 'row_widget_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardName  自定义监控面板名称
    * enterpriseId  企业项目Id
    * dashboardId  监控面板id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardName' => 'setDashboardName',
            'enterpriseId' => 'setEnterpriseId',
            'dashboardId' => 'setDashboardId',
            'rowWidgetNum' => 'setRowWidgetNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardName  自定义监控面板名称
    * enterpriseId  企业项目Id
    * dashboardId  监控面板id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardName' => 'getDashboardName',
            'enterpriseId' => 'getEnterpriseId',
            'dashboardId' => 'getDashboardId',
            'rowWidgetNum' => 'getRowWidgetNum'
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
        $this->container['dashboardName'] = isset($data['dashboardName']) ? $data['dashboardName'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['rowWidgetNum'] = isset($data['rowWidgetNum']) ? $data['rowWidgetNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['dashboardName'])) {
                $invalidProperties[] = "invalid value for 'dashboardName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['enterpriseId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['dashboardId']) && !preg_match("/^db([a-z]|[A-Z]|[0-9]){22}/", $this->container['dashboardId'])) {
                $invalidProperties[] = "invalid value for 'dashboardId', must be conform to the pattern /^db([a-z]|[A-Z]|[0-9]){22}/.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] > 3)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be bigger than or equal to 0.";
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
    * Gets dashboardName
    *  自定义监控面板名称
    *
    * @return string|null
    */
    public function getDashboardName()
    {
        return $this->container['dashboardName'];
    }

    /**
    * Sets dashboardName
    *
    * @param string|null $dashboardName 自定义监控面板名称
    *
    * @return $this
    */
    public function setDashboardName($dashboardName)
    {
        $this->container['dashboardName'] = $dashboardName;
        return $this;
    }

    /**
    * Gets enterpriseId
    *  企业项目Id
    *
    * @return string|null
    */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
    * Sets enterpriseId
    *
    * @param string|null $enterpriseId 企业项目Id
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets dashboardId
    *  监控面板id
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId 监控面板id
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets rowWidgetNum
    *  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @return int|null
    */
    public function getRowWidgetNum()
    {
        return $this->container['rowWidgetNum'];
    }

    /**
    * Sets rowWidgetNum
    *
    * @param int|null $rowWidgetNum 监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @return $this
    */
    public function setRowWidgetNum($rowWidgetNum)
    {
        $this->container['rowWidgetNum'] = $rowWidgetNum;
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

