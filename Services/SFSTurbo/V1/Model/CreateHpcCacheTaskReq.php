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
    * type  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
    * destTarget  目前只支持和src_target保持一致
    * destPrefix  目前只支持和src_prefix保持一致
    * attributes  attributes
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'srcTarget' => 'string',
            'srcPrefix' => 'string',
            'destTarget' => 'string',
            'destPrefix' => 'string',
            'attributes' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsTargetAttributes'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
    * destTarget  目前只支持和src_target保持一致
    * destPrefix  目前只支持和src_prefix保持一致
    * attributes  attributes
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'srcTarget' => null,
        'srcPrefix' => null,
        'destTarget' => null,
        'destPrefix' => null,
        'attributes' => null
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
    * type  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
    * destTarget  目前只支持和src_target保持一致
    * destPrefix  目前只支持和src_prefix保持一致
    * attributes  attributes
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'srcTarget' => 'src_target',
            'srcPrefix' => 'src_prefix',
            'destTarget' => 'dest_target',
            'destPrefix' => 'dest_prefix',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
    * destTarget  目前只支持和src_target保持一致
    * destPrefix  目前只支持和src_prefix保持一致
    * attributes  attributes
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'srcTarget' => 'setSrcTarget',
            'srcPrefix' => 'setSrcPrefix',
            'destTarget' => 'setDestTarget',
            'destPrefix' => 'setDestPrefix',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
    * destTarget  目前只支持和src_target保持一致
    * destPrefix  目前只支持和src_prefix保持一致
    * attributes  attributes
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'srcTarget' => 'getSrcTarget',
            'srcPrefix' => 'getSrcPrefix',
            'destTarget' => 'getDestTarget',
            'destPrefix' => 'getDestPrefix',
            'attributes' => 'getAttributes'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
    *  任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
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
    * @param string $type 任务类型，当前支持import(附加元数据导入)，import_metadata(快速导入)，preload(数据预热)，export(导出)。  附加元数据导入方式会导入OBS对象的元数据（名称、大小、最后修改时间）以及来源于SFS Turbo 导出时的附加元数据（如uid、gid、mode）。  快速导入方式仅会导入OBS对象的元数据（名称、大小、最后修改时间），不会导入其它附加元数据（如uid、gid、mode），SFS Turbo会生成默认的附加元数据。  数据预热功能会同时导入元数据和数据内容，数据预热中的元数据导入采用快速导入方式，不会导入其它附加元数据（如uid、gid、mode）。  数据导出功能会将您在联动目录里创建的文件，以及对从OBS导入后又做过修改的文件导出存储到OBS桶里。
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
    *  联动目录名称
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
    * @param string $srcTarget 联动目录名称
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
    *  导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
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
    * @param string|null $srcPrefix 导入导出任务的源端路径前缀，导入时不需要包含OBS桶名，导出时不需要包含联动目录名称。  对于数据预热导入，携带源端路径前缀时必须是以“/”结尾的目录或具体到某个对象。  如果不带该字段，导入时会导入绑定OBS桶内的所有对象，导出时会导出联动目录下的所有文件。
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
    *  目前只支持和src_target保持一致
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
    * @param string $destTarget 目前只支持和src_target保持一致
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
    *  目前只支持和src_prefix保持一致
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
    * @param string|null $destPrefix 目前只支持和src_prefix保持一致
    *
    * @return $this
    */
    public function setDestPrefix($destPrefix)
    {
        $this->container['destPrefix'] = $destPrefix;
        return $this;
    }

    /**
    * Gets attributes
    *  attributes
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsTargetAttributes|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsTargetAttributes|null $attributes attributes
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

