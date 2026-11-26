<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperatorArgument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperatorArgument';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**：参数键
    * name  **参数解释**：参数名称
    * type  type
    * tips  **参数解释**：参数说明
    * min  **参数解释**：参数最小值，数值型参数必填
    * max  **参数解释**：参数最大值，数值型参数必填
    * between  **参数解释**：是否为区间型数值
    * items  **参数解释**：参数选项列表
    * defaultValue  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    * required  **参数解释**：参数是否必填，默认false
    * visible  **参数解释**：该参数界面是否展示给用户配置，默认true
    * argDisplayType  **参数解释**：参数前端组件类型
    * taskCategory  **参数解释**：数据集支持的任务类型，type为dataset时可用
    * datasetCatalog  **参数解释**：数据集来源，type为dataset时可用
    * assetTypes  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    * assetCodes  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    * subAssetType  **参数解释**：模型的子资产类型,type为large_model时可用
    * dependArgs  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'name' => 'string',
            'type' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgTypeEnum',
            'tips' => 'string',
            'min' => 'float',
            'max' => 'float',
            'between' => 'bool',
            'items' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgItem[]',
            'defaultValue' => 'string',
            'required' => 'bool',
            'visible' => 'bool',
            'argDisplayType' => 'string',
            'taskCategory' => 'string[]',
            'datasetCatalog' => 'string[]',
            'assetTypes' => 'string',
            'assetCodes' => 'string',
            'subAssetType' => 'string',
            'dependArgs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DependArg[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**：参数键
    * name  **参数解释**：参数名称
    * type  type
    * tips  **参数解释**：参数说明
    * min  **参数解释**：参数最小值，数值型参数必填
    * max  **参数解释**：参数最大值，数值型参数必填
    * between  **参数解释**：是否为区间型数值
    * items  **参数解释**：参数选项列表
    * defaultValue  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    * required  **参数解释**：参数是否必填，默认false
    * visible  **参数解释**：该参数界面是否展示给用户配置，默认true
    * argDisplayType  **参数解释**：参数前端组件类型
    * taskCategory  **参数解释**：数据集支持的任务类型，type为dataset时可用
    * datasetCatalog  **参数解释**：数据集来源，type为dataset时可用
    * assetTypes  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    * assetCodes  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    * subAssetType  **参数解释**：模型的子资产类型,type为large_model时可用
    * dependArgs  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'name' => null,
        'type' => null,
        'tips' => null,
        'min' => 'float',
        'max' => 'float',
        'between' => null,
        'items' => null,
        'defaultValue' => null,
        'required' => null,
        'visible' => null,
        'argDisplayType' => null,
        'taskCategory' => null,
        'datasetCatalog' => null,
        'assetTypes' => null,
        'assetCodes' => null,
        'subAssetType' => null,
        'dependArgs' => null
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
    * key  **参数解释**：参数键
    * name  **参数解释**：参数名称
    * type  type
    * tips  **参数解释**：参数说明
    * min  **参数解释**：参数最小值，数值型参数必填
    * max  **参数解释**：参数最大值，数值型参数必填
    * between  **参数解释**：是否为区间型数值
    * items  **参数解释**：参数选项列表
    * defaultValue  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    * required  **参数解释**：参数是否必填，默认false
    * visible  **参数解释**：该参数界面是否展示给用户配置，默认true
    * argDisplayType  **参数解释**：参数前端组件类型
    * taskCategory  **参数解释**：数据集支持的任务类型，type为dataset时可用
    * datasetCatalog  **参数解释**：数据集来源，type为dataset时可用
    * assetTypes  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    * assetCodes  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    * subAssetType  **参数解释**：模型的子资产类型,type为large_model时可用
    * dependArgs  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'name' => 'name',
            'type' => 'type',
            'tips' => 'tips',
            'min' => 'min',
            'max' => 'max',
            'between' => 'between',
            'items' => 'items',
            'defaultValue' => 'default_value',
            'required' => 'required',
            'visible' => 'visible',
            'argDisplayType' => 'arg_display_type',
            'taskCategory' => 'task_category',
            'datasetCatalog' => 'dataset_catalog',
            'assetTypes' => 'asset_types',
            'assetCodes' => 'asset_codes',
            'subAssetType' => 'sub_asset_type',
            'dependArgs' => 'depend_args'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**：参数键
    * name  **参数解释**：参数名称
    * type  type
    * tips  **参数解释**：参数说明
    * min  **参数解释**：参数最小值，数值型参数必填
    * max  **参数解释**：参数最大值，数值型参数必填
    * between  **参数解释**：是否为区间型数值
    * items  **参数解释**：参数选项列表
    * defaultValue  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    * required  **参数解释**：参数是否必填，默认false
    * visible  **参数解释**：该参数界面是否展示给用户配置，默认true
    * argDisplayType  **参数解释**：参数前端组件类型
    * taskCategory  **参数解释**：数据集支持的任务类型，type为dataset时可用
    * datasetCatalog  **参数解释**：数据集来源，type为dataset时可用
    * assetTypes  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    * assetCodes  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    * subAssetType  **参数解释**：模型的子资产类型,type为large_model时可用
    * dependArgs  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'name' => 'setName',
            'type' => 'setType',
            'tips' => 'setTips',
            'min' => 'setMin',
            'max' => 'setMax',
            'between' => 'setBetween',
            'items' => 'setItems',
            'defaultValue' => 'setDefaultValue',
            'required' => 'setRequired',
            'visible' => 'setVisible',
            'argDisplayType' => 'setArgDisplayType',
            'taskCategory' => 'setTaskCategory',
            'datasetCatalog' => 'setDatasetCatalog',
            'assetTypes' => 'setAssetTypes',
            'assetCodes' => 'setAssetCodes',
            'subAssetType' => 'setSubAssetType',
            'dependArgs' => 'setDependArgs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**：参数键
    * name  **参数解释**：参数名称
    * type  type
    * tips  **参数解释**：参数说明
    * min  **参数解释**：参数最小值，数值型参数必填
    * max  **参数解释**：参数最大值，数值型参数必填
    * between  **参数解释**：是否为区间型数值
    * items  **参数解释**：参数选项列表
    * defaultValue  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    * required  **参数解释**：参数是否必填，默认false
    * visible  **参数解释**：该参数界面是否展示给用户配置，默认true
    * argDisplayType  **参数解释**：参数前端组件类型
    * taskCategory  **参数解释**：数据集支持的任务类型，type为dataset时可用
    * datasetCatalog  **参数解释**：数据集来源，type为dataset时可用
    * assetTypes  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    * assetCodes  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    * subAssetType  **参数解释**：模型的子资产类型,type为large_model时可用
    * dependArgs  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'name' => 'getName',
            'type' => 'getType',
            'tips' => 'getTips',
            'min' => 'getMin',
            'max' => 'getMax',
            'between' => 'getBetween',
            'items' => 'getItems',
            'defaultValue' => 'getDefaultValue',
            'required' => 'getRequired',
            'visible' => 'getVisible',
            'argDisplayType' => 'getArgDisplayType',
            'taskCategory' => 'getTaskCategory',
            'datasetCatalog' => 'getDatasetCatalog',
            'assetTypes' => 'getAssetTypes',
            'assetCodes' => 'getAssetCodes',
            'subAssetType' => 'getSubAssetType',
            'dependArgs' => 'getDependArgs'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['between'] = isset($data['between']) ? $data['between'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['argDisplayType'] = isset($data['argDisplayType']) ? $data['argDisplayType'] : null;
        $this->container['taskCategory'] = isset($data['taskCategory']) ? $data['taskCategory'] : null;
        $this->container['datasetCatalog'] = isset($data['datasetCatalog']) ? $data['datasetCatalog'] : null;
        $this->container['assetTypes'] = isset($data['assetTypes']) ? $data['assetTypes'] : null;
        $this->container['assetCodes'] = isset($data['assetCodes']) ? $data['assetCodes'] : null;
        $this->container['subAssetType'] = isset($data['subAssetType']) ? $data['subAssetType'] : null;
        $this->container['dependArgs'] = isset($data['dependArgs']) ? $data['dependArgs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets key
    *  **参数解释**：参数键
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key **参数解释**：参数键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：参数名称
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
    * @param string $name **参数解释**：参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgTypeEnum
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgTypeEnum $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tips
    *  **参数解释**：参数说明
    *
    * @return string|null
    */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
    * Sets tips
    *
    * @param string|null $tips **参数解释**：参数说明
    *
    * @return $this
    */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;
        return $this;
    }

    /**
    * Gets min
    *  **参数解释**：参数最小值，数值型参数必填
    *
    * @return float|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param float|null $min **参数解释**：参数最小值，数值型参数必填
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  **参数解释**：参数最大值，数值型参数必填
    *
    * @return float|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param float|null $max **参数解释**：参数最大值，数值型参数必填
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets between
    *  **参数解释**：是否为区间型数值
    *
    * @return bool|null
    */
    public function getBetween()
    {
        return $this->container['between'];
    }

    /**
    * Sets between
    *
    * @param bool|null $between **参数解释**：是否为区间型数值
    *
    * @return $this
    */
    public function setBetween($between)
    {
        $this->container['between'] = $between;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**：参数选项列表
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgItem[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgItem[]|null $items **参数解释**：参数选项列表
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }

    /**
    * Gets defaultValue
    *  **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue **参数解释**：参数默认值，用户不可见且必填的参数必须提供默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets required
    *  **参数解释**：参数是否必填，默认false
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required **参数解释**：参数是否必填，默认false
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets visible
    *  **参数解释**：该参数界面是否展示给用户配置，默认true
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible **参数解释**：该参数界面是否展示给用户配置，默认true
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets argDisplayType
    *  **参数解释**：参数前端组件类型
    *
    * @return string|null
    */
    public function getArgDisplayType()
    {
        return $this->container['argDisplayType'];
    }

    /**
    * Sets argDisplayType
    *
    * @param string|null $argDisplayType **参数解释**：参数前端组件类型
    *
    * @return $this
    */
    public function setArgDisplayType($argDisplayType)
    {
        $this->container['argDisplayType'] = $argDisplayType;
        return $this;
    }

    /**
    * Gets taskCategory
    *  **参数解释**：数据集支持的任务类型，type为dataset时可用
    *
    * @return string[]|null
    */
    public function getTaskCategory()
    {
        return $this->container['taskCategory'];
    }

    /**
    * Sets taskCategory
    *
    * @param string[]|null $taskCategory **参数解释**：数据集支持的任务类型，type为dataset时可用
    *
    * @return $this
    */
    public function setTaskCategory($taskCategory)
    {
        $this->container['taskCategory'] = $taskCategory;
        return $this;
    }

    /**
    * Gets datasetCatalog
    *  **参数解释**：数据集来源，type为dataset时可用
    *
    * @return string[]|null
    */
    public function getDatasetCatalog()
    {
        return $this->container['datasetCatalog'];
    }

    /**
    * Sets datasetCatalog
    *
    * @param string[]|null $datasetCatalog **参数解释**：数据集来源，type为dataset时可用
    *
    * @return $this
    */
    public function setDatasetCatalog($datasetCatalog)
    {
        $this->container['datasetCatalog'] = $datasetCatalog;
        return $this;
    }

    /**
    * Gets assetTypes
    *  **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    *
    * @return string|null
    */
    public function getAssetTypes()
    {
        return $this->container['assetTypes'];
    }

    /**
    * Sets assetTypes
    *
    * @param string|null $assetTypes **参数解释**：资产类型,type为large_model时可用,多个以','分隔
    *
    * @return $this
    */
    public function setAssetTypes($assetTypes)
    {
        $this->container['assetTypes'] = $assetTypes;
        return $this;
    }

    /**
    * Gets assetCodes
    *  **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    *
    * @return string|null
    */
    public function getAssetCodes()
    {
        return $this->container['assetCodes'];
    }

    /**
    * Sets assetCodes
    *
    * @param string|null $assetCodes **参数解释**：资产代码,type为large_model时可用,多个以','分隔
    *
    * @return $this
    */
    public function setAssetCodes($assetCodes)
    {
        $this->container['assetCodes'] = $assetCodes;
        return $this;
    }

    /**
    * Gets subAssetType
    *  **参数解释**：模型的子资产类型,type为large_model时可用
    *
    * @return string|null
    */
    public function getSubAssetType()
    {
        return $this->container['subAssetType'];
    }

    /**
    * Sets subAssetType
    *
    * @param string|null $subAssetType **参数解释**：模型的子资产类型,type为large_model时可用
    *
    * @return $this
    */
    public function setSubAssetType($subAssetType)
    {
        $this->container['subAssetType'] = $subAssetType;
        return $this;
    }

    /**
    * Gets dependArgs
    *  **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DependArg[]|null
    */
    public function getDependArgs()
    {
        return $this->container['dependArgs'];
    }

    /**
    * Sets dependArgs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DependArg[]|null $dependArgs **参数解释**：当前参数所依赖的其他参数信息列表
    *
    * @return $this
    */
    public function setDependArgs($dependArgs)
    {
        $this->container['dependArgs'] = $dependArgs;
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

