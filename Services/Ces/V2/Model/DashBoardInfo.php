<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashBoardInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashBoardInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardId  监控看板id
    * dashboardName  自定义监控看板名称
    * enterpriseId  企业项目Id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * creatorName  监控看板的创建用户名
    * createTime  监控看板创建时间
    * widgetsNum  看板下的视图总数
    * namespace  命名空间
    * subProduct  子产品标识
    * dashboardTemplateId  监控大盘模板id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardId' => 'string',
            'dashboardName' => 'string',
            'enterpriseId' => 'string',
            'rowWidgetNum' => 'int',
            'isFavorite' => 'bool',
            'creatorName' => 'string',
            'createTime' => 'int',
            'widgetsNum' => 'int',
            'namespace' => 'string',
            'subProduct' => 'string',
            'dashboardTemplateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardId  监控看板id
    * dashboardName  自定义监控看板名称
    * enterpriseId  企业项目Id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * creatorName  监控看板的创建用户名
    * createTime  监控看板创建时间
    * widgetsNum  看板下的视图总数
    * namespace  命名空间
    * subProduct  子产品标识
    * dashboardTemplateId  监控大盘模板id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardId' => null,
        'dashboardName' => null,
        'enterpriseId' => null,
        'rowWidgetNum' => null,
        'isFavorite' => null,
        'creatorName' => null,
        'createTime' => 'int64',
        'widgetsNum' => 'integer',
        'namespace' => null,
        'subProduct' => null,
        'dashboardTemplateId' => null
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
    * dashboardId  监控看板id
    * dashboardName  自定义监控看板名称
    * enterpriseId  企业项目Id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * creatorName  监控看板的创建用户名
    * createTime  监控看板创建时间
    * widgetsNum  看板下的视图总数
    * namespace  命名空间
    * subProduct  子产品标识
    * dashboardTemplateId  监控大盘模板id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardId' => 'dashboard_id',
            'dashboardName' => 'dashboard_name',
            'enterpriseId' => 'enterprise_id',
            'rowWidgetNum' => 'row_widget_num',
            'isFavorite' => 'is_favorite',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'widgetsNum' => 'widgets_num',
            'namespace' => 'namespace',
            'subProduct' => 'sub_product',
            'dashboardTemplateId' => 'dashboard_template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardId  监控看板id
    * dashboardName  自定义监控看板名称
    * enterpriseId  企业项目Id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * creatorName  监控看板的创建用户名
    * createTime  监控看板创建时间
    * widgetsNum  看板下的视图总数
    * namespace  命名空间
    * subProduct  子产品标识
    * dashboardTemplateId  监控大盘模板id
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardId' => 'setDashboardId',
            'dashboardName' => 'setDashboardName',
            'enterpriseId' => 'setEnterpriseId',
            'rowWidgetNum' => 'setRowWidgetNum',
            'isFavorite' => 'setIsFavorite',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'widgetsNum' => 'setWidgetsNum',
            'namespace' => 'setNamespace',
            'subProduct' => 'setSubProduct',
            'dashboardTemplateId' => 'setDashboardTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardId  监控看板id
    * dashboardName  自定义监控看板名称
    * enterpriseId  企业项目Id
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * creatorName  监控看板的创建用户名
    * createTime  监控看板创建时间
    * widgetsNum  看板下的视图总数
    * namespace  命名空间
    * subProduct  子产品标识
    * dashboardTemplateId  监控大盘模板id
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardId' => 'getDashboardId',
            'dashboardName' => 'getDashboardName',
            'enterpriseId' => 'getEnterpriseId',
            'rowWidgetNum' => 'getRowWidgetNum',
            'isFavorite' => 'getIsFavorite',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'widgetsNum' => 'getWidgetsNum',
            'namespace' => 'getNamespace',
            'subProduct' => 'getSubProduct',
            'dashboardTemplateId' => 'getDashboardTemplateId'
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
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['dashboardName'] = isset($data['dashboardName']) ? $data['dashboardName'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['rowWidgetNum'] = isset($data['rowWidgetNum']) ? $data['rowWidgetNum'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['widgetsNum'] = isset($data['widgetsNum']) ? $data['widgetsNum'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['subProduct'] = isset($data['subProduct']) ? $data['subProduct'] : null;
        $this->container['dashboardTemplateId'] = isset($data['dashboardTemplateId']) ? $data['dashboardTemplateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dashboardId']) && !preg_match("/^db([a-z]|[A-Z]|[0-9]){22}/", $this->container['dashboardId'])) {
                $invalidProperties[] = "invalid value for 'dashboardId', must be conform to the pattern /^db([a-z]|[A-Z]|[0-9]){22}/.";
            }
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
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] > 3)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['creatorName'])) {
                $invalidProperties[] = "invalid value for 'creatorName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['widgetsNum']) && ($this->container['widgetsNum'] > 50)) {
                $invalidProperties[] = "invalid value for 'widgetsNum', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['widgetsNum']) && ($this->container['widgetsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'widgetsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            if (!is_null($this->container['subProduct']) && (mb_strlen($this->container['subProduct']) > 128)) {
                $invalidProperties[] = "invalid value for 'subProduct', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['subProduct']) && (mb_strlen($this->container['subProduct']) < 1)) {
                $invalidProperties[] = "invalid value for 'subProduct', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardTemplateId']) && !preg_match("/^mb([a-z]|[A-Z]|[0-9]){22}/", $this->container['dashboardTemplateId'])) {
                $invalidProperties[] = "invalid value for 'dashboardTemplateId', must be conform to the pattern /^mb([a-z]|[A-Z]|[0-9]){22}/.";
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
    * Gets dashboardId
    *  监控看板id
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
    * @param string|null $dashboardId 监控看板id
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets dashboardName
    *  自定义监控看板名称
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
    * @param string|null $dashboardName 自定义监控看板名称
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
    * Gets isFavorite
    *  监控看板是否标记收藏, true: 收藏, false: 未收藏
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite 监控看板是否标记收藏, true: 收藏, false: 未收藏
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets creatorName
    *  监控看板的创建用户名
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 监控看板的创建用户名
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  监控看板创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 监控看板创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets widgetsNum
    *  看板下的视图总数
    *
    * @return int|null
    */
    public function getWidgetsNum()
    {
        return $this->container['widgetsNum'];
    }

    /**
    * Sets widgetsNum
    *
    * @param int|null $widgetsNum 看板下的视图总数
    *
    * @return $this
    */
    public function setWidgetsNum($widgetsNum)
    {
        $this->container['widgetsNum'] = $widgetsNum;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets subProduct
    *  子产品标识
    *
    * @return string|null
    */
    public function getSubProduct()
    {
        return $this->container['subProduct'];
    }

    /**
    * Sets subProduct
    *
    * @param string|null $subProduct 子产品标识
    *
    * @return $this
    */
    public function setSubProduct($subProduct)
    {
        $this->container['subProduct'] = $subProduct;
        return $this;
    }

    /**
    * Gets dashboardTemplateId
    *  监控大盘模板id
    *
    * @return string|null
    */
    public function getDashboardTemplateId()
    {
        return $this->container['dashboardTemplateId'];
    }

    /**
    * Sets dashboardTemplateId
    *
    * @param string|null $dashboardTemplateId 监控大盘模板id
    *
    * @return $this
    */
    public function setDashboardTemplateId($dashboardTemplateId)
    {
        $this->container['dashboardTemplateId'] = $dashboardTemplateId;
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

