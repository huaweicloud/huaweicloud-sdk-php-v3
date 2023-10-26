<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHpcCacheTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHpcCacheTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    * srcTarget  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    * srcPrefix  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    * destTarget  目的端对象。目前只支持和src_target保持一致
    * destPrefix  目的端路径。目前只支持和src_prefix保持一致
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'srcTarget' => 'string',
            'srcPrefix' => 'string',
            'destTarget' => 'string',
            'destPrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    * srcTarget  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    * srcPrefix  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    * destTarget  目的端对象。目前只支持和src_target保持一致
    * destPrefix  目的端路径。目前只支持和src_prefix保持一致
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'srcTarget' => null,
        'srcPrefix' => null,
        'destTarget' => null,
        'destPrefix' => null
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
    * type  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    * srcTarget  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    * srcPrefix  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    * destTarget  目的端对象。目前只支持和src_target保持一致
    * destPrefix  目的端路径。目前只支持和src_prefix保持一致
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'srcTarget' => 'src_target',
            'srcPrefix' => 'src_prefix',
            'destTarget' => 'dest_target',
            'destPrefix' => 'dest_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    * srcTarget  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    * srcPrefix  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    * destTarget  目的端对象。目前只支持和src_target保持一致
    * destPrefix  目的端路径。目前只支持和src_prefix保持一致
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'srcTarget' => 'setSrcTarget',
            'srcPrefix' => 'setSrcPrefix',
            'destTarget' => 'setDestTarget',
            'destPrefix' => 'setDestPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    * srcTarget  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    * srcPrefix  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    * destTarget  目的端对象。目前只支持和src_target保持一致
    * destPrefix  目的端路径。目前只支持和src_prefix保持一致
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'srcTarget' => 'getSrcTarget',
            'srcPrefix' => 'getSrcPrefix',
            'destTarget' => 'getDestTarget',
            'destPrefix' => 'getDestPrefix'
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
    const TYPE_IMPORT = 'import';
    const TYPE_EXPORT = 'export';
    const TYPE_IMPORT_METADATA = 'import_metadata';
    const TYPE_PRELOAD = 'preload';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMPORT,
            self::TYPE_EXPORT,
            self::TYPE_IMPORT_METADATA,
            self::TYPE_PRELOAD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['srcTarget'] = isset($data['srcTarget']) ? $data['srcTarget'] : null;
        $this->container['srcPrefix'] = isset($data['srcPrefix']) ? $data['srcPrefix'] : null;
        $this->container['destTarget'] = isset($data['destTarget']) ? $data['destTarget'] : null;
        $this->container['destPrefix'] = isset($data['destPrefix']) ? $data['destPrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['srcTarget'] === null) {
            $invalidProperties[] = "'srcTarget' can't be null";
        }
        if ($this->container['destTarget'] === null) {
            $invalidProperties[] = "'destTarget' can't be null";
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
    * Gets type
    *  操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 操作类型，当前支持import(普通导入)，export(导出)，import_metadata(元数据导入)，preload(数据预热)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets srcTarget
    *  源端对象。OBS桶绑定文件系统后的文件系统路径名称
    *
    * @return string
    */
    public function getSrcTarget()
    {
        return $this->container['srcTarget'];
    }

    /**
    * Sets srcTarget
    *
    * @param string $srcTarget 源端对象。OBS桶绑定文件系统后的文件系统路径名称
    *
    * @return $this
    */
    public function setSrcTarget($srcTarget)
    {
        $this->container['srcTarget'] = $srcTarget;
        return $this;
    }

    /**
    * Gets srcPrefix
    *  源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    *
    * @return string|null
    */
    public function getSrcPrefix()
    {
        return $this->container['srcPrefix'];
    }

    /**
    * Sets srcPrefix
    *
    * @param string|null $srcPrefix 源端路径前缀。例如，'/mnt/sfs_turbo' 为您的挂载目录，对于导入任务，前缀为prefix，则会导入到 '/mnt/sfs_turbo/prefix'；如导入前缀为空，则会直接导入到 '/mnt/sfs_turbo'。对于导出任务，前缀为prefix，则会导出到 '/mnt/sfs_turbo/prefix'；如导出前缀为空，则会直接导出到 '/mnt/sfs_turbo'。
    *
    * @return $this
    */
    public function setSrcPrefix($srcPrefix)
    {
        $this->container['srcPrefix'] = $srcPrefix;
        return $this;
    }

    /**
    * Gets destTarget
    *  目的端对象。目前只支持和src_target保持一致
    *
    * @return string
    */
    public function getDestTarget()
    {
        return $this->container['destTarget'];
    }

    /**
    * Sets destTarget
    *
    * @param string $destTarget 目的端对象。目前只支持和src_target保持一致
    *
    * @return $this
    */
    public function setDestTarget($destTarget)
    {
        $this->container['destTarget'] = $destTarget;
        return $this;
    }

    /**
    * Gets destPrefix
    *  目的端路径。目前只支持和src_prefix保持一致
    *
    * @return string|null
    */
    public function getDestPrefix()
    {
        return $this->container['destPrefix'];
    }

    /**
    * Sets destPrefix
    *
    * @param string|null $destPrefix 目的端路径。目前只支持和src_prefix保持一致
    *
    * @return $this
    */
    public function setDestPrefix($destPrefix)
    {
        $this->container['destPrefix'] = $destPrefix;
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

