<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreSnapshotReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreSnapshotReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetCluster  快照要恢复到的集群的ID。
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    * renamePattern  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * renameReplacement  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * replaceExistIndices  替换已存在的索引。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetCluster' => 'string',
            'indices' => 'string',
            'renamePattern' => 'string',
            'renameReplacement' => 'string',
            'replaceExistIndices' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetCluster  快照要恢复到的集群的ID。
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    * renamePattern  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * renameReplacement  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * replaceExistIndices  替换已存在的索引。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetCluster' => null,
        'indices' => null,
        'renamePattern' => null,
        'renameReplacement' => null,
        'replaceExistIndices' => null
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
    * targetCluster  快照要恢复到的集群的ID。
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    * renamePattern  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * renameReplacement  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * replaceExistIndices  替换已存在的索引。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetCluster' => 'targetCluster',
            'indices' => 'indices',
            'renamePattern' => 'renamePattern',
            'renameReplacement' => 'renameReplacement',
            'replaceExistIndices' => 'replace_exist_indices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetCluster  快照要恢复到的集群的ID。
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    * renamePattern  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * renameReplacement  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * replaceExistIndices  替换已存在的索引。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetCluster' => 'setTargetCluster',
            'indices' => 'setIndices',
            'renamePattern' => 'setRenamePattern',
            'renameReplacement' => 'setRenameReplacement',
            'replaceExistIndices' => 'setReplaceExistIndices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetCluster  快照要恢复到的集群的ID。
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    * renamePattern  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * renameReplacement  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    * replaceExistIndices  替换已存在的索引。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetCluster' => 'getTargetCluster',
            'indices' => 'getIndices',
            'renamePattern' => 'getRenamePattern',
            'renameReplacement' => 'getRenameReplacement',
            'replaceExistIndices' => 'getReplaceExistIndices'
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
        $this->container['targetCluster'] = isset($data['targetCluster']) ? $data['targetCluster'] : null;
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
        $this->container['renamePattern'] = isset($data['renamePattern']) ? $data['renamePattern'] : null;
        $this->container['renameReplacement'] = isset($data['renameReplacement']) ? $data['renameReplacement'] : null;
        $this->container['replaceExistIndices'] = isset($data['replaceExistIndices']) ? $data['replaceExistIndices'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetCluster'] === null) {
            $invalidProperties[] = "'targetCluster' can't be null";
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
    * Gets targetCluster
    *  快照要恢复到的集群的ID。
    *
    * @return string
    */
    public function getTargetCluster()
    {
        return $this->container['targetCluster'];
    }

    /**
    * Sets targetCluster
    *
    * @param string $targetCluster 快照要恢复到的集群的ID。
    *
    * @return $this
    */
    public function setTargetCluster($targetCluster)
    {
        $this->container['targetCluster'] = $targetCluster;
        return $this;
    }

    /**
    * Gets indices
    *  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @return string|null
    */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
    * Sets indices
    *
    * @param string|null $indices 指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
        return $this;
    }

    /**
    * Gets renamePattern
    *  匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    *
    * @return string|null
    */
    public function getRenamePattern()
    {
        return $this->container['renamePattern'];
    }

    /**
    * Sets renamePattern
    *
    * @param string|null $renamePattern 匹配要恢复的索引规则，最大支持1024个字符。根据此处定义的过滤条件去恢复符合条件的索引，过滤条件请使用正则表达式。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。   renamePattern参数与renameReplacement参数必须同时设置才能生效。
    *
    * @return $this
    */
    public function setRenamePattern($renamePattern)
    {
        $this->container['renamePattern'] = $renamePattern;
        return $this;
    }

    /**
    * Gets renameReplacement
    *  索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    *
    * @return string|null
    */
    public function getRenameReplacement()
    {
        return $this->container['renameReplacement'];
    }

    /**
    * Sets renameReplacement
    *
    * @param string|null $renameReplacement 索引重命名的规则。0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?,特殊字符。例如，“restored_index_$1”表示在所有恢复的索引名称前面加上“restored_”。    renamePattern参数与renameReplacement参数必须同时设置才能生效。
    *
    * @return $this
    */
    public function setRenameReplacement($renameReplacement)
    {
        $this->container['renameReplacement'] = $renameReplacement;
        return $this;
    }

    /**
    * Gets replaceExistIndices
    *  替换已存在的索引。
    *
    * @return bool|null
    */
    public function getReplaceExistIndices()
    {
        return $this->container['replaceExistIndices'];
    }

    /**
    * Sets replaceExistIndices
    *
    * @param bool|null $replaceExistIndices 替换已存在的索引。
    *
    * @return $this
    */
    public function setReplaceExistIndices($replaceExistIndices)
    {
        $this->container['replaceExistIndices'] = $replaceExistIndices;
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

