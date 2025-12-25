<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSearchMetricHitsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSearchMetricHitsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricIds  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    * workspaceIds  工作空间列表, 当指标支持获取多工作空间数据时填写。
    * params  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    * interactiveParams  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    * fieldIds  指标卡片ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricIds' => 'string[]',
            'workspaceIds' => 'string[]',
            'params' => 'map[string,string][]',
            'interactiveParams' => 'map[string,string][]',
            'fieldIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricIds  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    * workspaceIds  工作空间列表, 当指标支持获取多工作空间数据时填写。
    * params  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    * interactiveParams  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    * fieldIds  指标卡片ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricIds' => null,
        'workspaceIds' => null,
        'params' => null,
        'interactiveParams' => null,
        'fieldIds' => null
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
    * metricIds  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    * workspaceIds  工作空间列表, 当指标支持获取多工作空间数据时填写。
    * params  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    * interactiveParams  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    * fieldIds  指标卡片ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricIds' => 'metric_ids',
            'workspaceIds' => 'workspace_ids',
            'params' => 'params',
            'interactiveParams' => 'interactive_params',
            'fieldIds' => 'field_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricIds  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    * workspaceIds  工作空间列表, 当指标支持获取多工作空间数据时填写。
    * params  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    * interactiveParams  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    * fieldIds  指标卡片ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'metricIds' => 'setMetricIds',
            'workspaceIds' => 'setWorkspaceIds',
            'params' => 'setParams',
            'interactiveParams' => 'setInteractiveParams',
            'fieldIds' => 'setFieldIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricIds  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    * workspaceIds  工作空间列表, 当指标支持获取多工作空间数据时填写。
    * params  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    * interactiveParams  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    * fieldIds  指标卡片ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'metricIds' => 'getMetricIds',
            'workspaceIds' => 'getWorkspaceIds',
            'params' => 'getParams',
            'interactiveParams' => 'getInteractiveParams',
            'fieldIds' => 'getFieldIds'
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
        $this->container['metricIds'] = isset($data['metricIds']) ? $data['metricIds'] : null;
        $this->container['workspaceIds'] = isset($data['workspaceIds']) ? $data['workspaceIds'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['interactiveParams'] = isset($data['interactiveParams']) ? $data['interactiveParams'] : null;
        $this->container['fieldIds'] = isset($data['fieldIds']) ? $data['fieldIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricIds'] === null) {
            $invalidProperties[] = "'metricIds' can't be null";
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
    * Gets metricIds
    *  待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    *
    * @return string[]
    */
    public function getMetricIds()
    {
        return $this->container['metricIds'];
    }

    /**
    * Sets metricIds
    *
    * @param string[] $metricIds 待查询的指标Id列表, 可参照附录中指标信息说明获取已有指标信息。
    *
    * @return $this
    */
    public function setMetricIds($metricIds)
    {
        $this->container['metricIds'] = $metricIds;
        return $this;
    }

    /**
    * Gets workspaceIds
    *  工作空间列表, 当指标支持获取多工作空间数据时填写。
    *
    * @return string[]|null
    */
    public function getWorkspaceIds()
    {
        return $this->container['workspaceIds'];
    }

    /**
    * Sets workspaceIds
    *
    * @param string[]|null $workspaceIds 工作空间列表, 当指标支持获取多工作空间数据时填写。
    *
    * @return $this
    */
    public function setWorkspaceIds($workspaceIds)
    {
        $this->container['workspaceIds'] = $workspaceIds;
        return $this;
    }

    /**
    * Gets params
    *  待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    *
    * @return map[string,string][]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param map[string,string][]|null $params 待查询指标的参数列表，列表内每个元素为<String, String>的K-V形式，元素数量必须与metric_ids列表相同，具体填写方式请参照附录。
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets interactiveParams
    *  交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    *
    * @return map[string,string][]|null
    */
    public function getInteractiveParams()
    {
        return $this->container['interactiveParams'];
    }

    /**
    * Sets interactiveParams
    *
    * @param map[string,string][]|null $interactiveParams 交互式参数查询，当指标支持交互式参数时，填写<String, String>的K-V形式的参数列表，具体填写方式请参照附录。
    *
    * @return $this
    */
    public function setInteractiveParams($interactiveParams)
    {
        $this->container['interactiveParams'] = $interactiveParams;
        return $this;
    }

    /**
    * Gets fieldIds
    *  指标卡片ID列表
    *
    * @return string[]|null
    */
    public function getFieldIds()
    {
        return $this->container['fieldIds'];
    }

    /**
    * Sets fieldIds
    *
    * @param string[]|null $fieldIds 指标卡片ID列表
    *
    * @return $this
    */
    public function setFieldIds($fieldIds)
    {
        $this->container['fieldIds'] = $fieldIds;
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

