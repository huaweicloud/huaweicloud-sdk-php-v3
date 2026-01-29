<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCollectConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCollectConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alert  自动转告警的开关
    * allowAlert  能否开自动转告警
    * allowLts  是否支持lts
    * csvcDisplay  云服务描述
    * region  局点
    * sourceDisplay  数据源描述
    * success  是否创建成功
    * total  条数
    * datasets  关联的数据集列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alert' => 'bool',
            'allowAlert' => 'bool',
            'allowLts' => 'bool',
            'csvcDisplay' => 'string',
            'region' => 'string',
            'sourceDisplay' => 'string',
            'success' => 'bool',
            'total' => 'int',
            'datasets' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DatasetInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alert  自动转告警的开关
    * allowAlert  能否开自动转告警
    * allowLts  是否支持lts
    * csvcDisplay  云服务描述
    * region  局点
    * sourceDisplay  数据源描述
    * success  是否创建成功
    * total  条数
    * datasets  关联的数据集列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alert' => null,
        'allowAlert' => null,
        'allowLts' => null,
        'csvcDisplay' => null,
        'region' => null,
        'sourceDisplay' => null,
        'success' => null,
        'total' => 'int32',
        'datasets' => null
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
    * alert  自动转告警的开关
    * allowAlert  能否开自动转告警
    * allowLts  是否支持lts
    * csvcDisplay  云服务描述
    * region  局点
    * sourceDisplay  数据源描述
    * success  是否创建成功
    * total  条数
    * datasets  关联的数据集列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alert' => 'alert',
            'allowAlert' => 'allow_alert',
            'allowLts' => 'allow_lts',
            'csvcDisplay' => 'csvc_display',
            'region' => 'region',
            'sourceDisplay' => 'source_display',
            'success' => 'success',
            'total' => 'total',
            'datasets' => 'datasets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alert  自动转告警的开关
    * allowAlert  能否开自动转告警
    * allowLts  是否支持lts
    * csvcDisplay  云服务描述
    * region  局点
    * sourceDisplay  数据源描述
    * success  是否创建成功
    * total  条数
    * datasets  关联的数据集列表
    *
    * @var string[]
    */
    protected static $setters = [
            'alert' => 'setAlert',
            'allowAlert' => 'setAllowAlert',
            'allowLts' => 'setAllowLts',
            'csvcDisplay' => 'setCsvcDisplay',
            'region' => 'setRegion',
            'sourceDisplay' => 'setSourceDisplay',
            'success' => 'setSuccess',
            'total' => 'setTotal',
            'datasets' => 'setDatasets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alert  自动转告警的开关
    * allowAlert  能否开自动转告警
    * allowLts  是否支持lts
    * csvcDisplay  云服务描述
    * region  局点
    * sourceDisplay  数据源描述
    * success  是否创建成功
    * total  条数
    * datasets  关联的数据集列表
    *
    * @var string[]
    */
    protected static $getters = [
            'alert' => 'getAlert',
            'allowAlert' => 'getAllowAlert',
            'allowLts' => 'getAllowLts',
            'csvcDisplay' => 'getCsvcDisplay',
            'region' => 'getRegion',
            'sourceDisplay' => 'getSourceDisplay',
            'success' => 'getSuccess',
            'total' => 'getTotal',
            'datasets' => 'getDatasets'
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
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['allowAlert'] = isset($data['allowAlert']) ? $data['allowAlert'] : null;
        $this->container['allowLts'] = isset($data['allowLts']) ? $data['allowLts'] : null;
        $this->container['csvcDisplay'] = isset($data['csvcDisplay']) ? $data['csvcDisplay'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sourceDisplay'] = isset($data['sourceDisplay']) ? $data['sourceDisplay'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['datasets'] = isset($data['datasets']) ? $data['datasets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['csvcDisplay']) && (mb_strlen($this->container['csvcDisplay']) > 256)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['csvcDisplay']) && (mb_strlen($this->container['csvcDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceDisplay']) && (mb_strlen($this->container['sourceDisplay']) > 256)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sourceDisplay']) && (mb_strlen($this->container['sourceDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 256)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets alert
    *  自动转告警的开关
    *
    * @return bool|null
    */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
    * Sets alert
    *
    * @param bool|null $alert 自动转告警的开关
    *
    * @return $this
    */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;
        return $this;
    }

    /**
    * Gets allowAlert
    *  能否开自动转告警
    *
    * @return bool|null
    */
    public function getAllowAlert()
    {
        return $this->container['allowAlert'];
    }

    /**
    * Sets allowAlert
    *
    * @param bool|null $allowAlert 能否开自动转告警
    *
    * @return $this
    */
    public function setAllowAlert($allowAlert)
    {
        $this->container['allowAlert'] = $allowAlert;
        return $this;
    }

    /**
    * Gets allowLts
    *  是否支持lts
    *
    * @return bool|null
    */
    public function getAllowLts()
    {
        return $this->container['allowLts'];
    }

    /**
    * Sets allowLts
    *
    * @param bool|null $allowLts 是否支持lts
    *
    * @return $this
    */
    public function setAllowLts($allowLts)
    {
        $this->container['allowLts'] = $allowLts;
        return $this;
    }

    /**
    * Gets csvcDisplay
    *  云服务描述
    *
    * @return string|null
    */
    public function getCsvcDisplay()
    {
        return $this->container['csvcDisplay'];
    }

    /**
    * Sets csvcDisplay
    *
    * @param string|null $csvcDisplay 云服务描述
    *
    * @return $this
    */
    public function setCsvcDisplay($csvcDisplay)
    {
        $this->container['csvcDisplay'] = $csvcDisplay;
        return $this;
    }

    /**
    * Gets region
    *  局点
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets sourceDisplay
    *  数据源描述
    *
    * @return string|null
    */
    public function getSourceDisplay()
    {
        return $this->container['sourceDisplay'];
    }

    /**
    * Sets sourceDisplay
    *
    * @param string|null $sourceDisplay 数据源描述
    *
    * @return $this
    */
    public function setSourceDisplay($sourceDisplay)
    {
        $this->container['sourceDisplay'] = $sourceDisplay;
        return $this;
    }

    /**
    * Gets success
    *  是否创建成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否创建成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets total
    *  条数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 条数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets datasets
    *  关联的数据集列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DatasetInfo[]|null
    */
    public function getDatasets()
    {
        return $this->container['datasets'];
    }

    /**
    * Sets datasets
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DatasetInfo[]|null $datasets 关联的数据集列表
    *
    * @return $this
    */
    public function setDatasets($datasets)
    {
        $this->container['datasets'] = $datasets;
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

