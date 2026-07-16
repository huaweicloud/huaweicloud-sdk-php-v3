<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataVolumesRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataVolumesRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    * id  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    * status  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    * uri  **参数解释**：存储路径。 **取值范围**：不涉及。
    * failureReason  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    * efsId  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'id' => 'string',
            'mountPath' => 'string',
            'status' => 'string',
            'uri' => 'string',
            'failureReason' => 'string',
            'efsId' => 'string',
            'mountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    * id  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    * status  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    * uri  **参数解释**：存储路径。 **取值范围**：不涉及。
    * failureReason  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    * efsId  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'id' => null,
        'mountPath' => null,
        'status' => null,
        'uri' => null,
        'failureReason' => null,
        'efsId' => null,
        'mountType' => null
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
    * category  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    * id  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    * status  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    * uri  **参数解释**：存储路径。 **取值范围**：不涉及。
    * failureReason  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    * efsId  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'id' => 'id',
            'mountPath' => 'mount_path',
            'status' => 'status',
            'uri' => 'uri',
            'failureReason' => 'failure_reason',
            'efsId' => 'efs_id',
            'mountType' => 'mount_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    * id  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    * status  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    * uri  **参数解释**：存储路径。 **取值范围**：不涉及。
    * failureReason  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    * efsId  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'id' => 'setId',
            'mountPath' => 'setMountPath',
            'status' => 'setStatus',
            'uri' => 'setUri',
            'failureReason' => 'setFailureReason',
            'efsId' => 'setEfsId',
            'mountType' => 'setMountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    * id  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    * status  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    * uri  **参数解释**：存储路径。 **取值范围**：不涉及。
    * failureReason  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    * efsId  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'id' => 'getId',
            'mountPath' => 'getMountPath',
            'status' => 'getStatus',
            'uri' => 'getUri',
            'failureReason' => 'getFailureReason',
            'efsId' => 'getEfsId',
            'mountType' => 'getMountType'
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
    const CATEGORY_OBS = 'OBS';
    const CATEGORY_OBSFS = 'OBSFS';
    const CATEGORY_EFS = 'EFS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_OBS,
            self::CATEGORY_OBSFS,
            self::CATEGORY_EFS,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
        $this->container['efsId'] = isset($data['efsId']) ? $data['efsId'] : null;
        $this->container['mountType'] = isset($data['mountType']) ? $data['mountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    * Gets category
    *  **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：存储类型。可选值为OBS/OBSFS/EFS。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：动态挂载实例ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string|null $mountPath **参数解释**：在Notebook实例中挂载的路径。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：动态挂载状态。 **取值范围**：枚举类型，取值如下： - MOUNTING：挂载中 - MOUNT_FAILED：挂载失败 - MOUNTED：已挂载 - UNMOUNTING：卸载中 - UNMOUNT_FAILED：卸载失败 - UNMOUNTED：卸载完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**：存储路径。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri **参数解释**：存储路径。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets failureReason
    *  **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
    * Sets failureReason
    *
    * @param string|null $failureReason **参数解释**：挂载失败原因，动态挂载状态为MOUNT_FAILED时返回。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;
        return $this;
    }

    /**
    * Gets efsId
    *  **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEfsId()
    {
        return $this->container['efsId'];
    }

    /**
    * Sets efsId
    *
    * @param string|null $efsId **参数解释**：EFS存储实例ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEfsId($efsId)
    {
        $this->container['efsId'] = $efsId;
        return $this;
    }

    /**
    * Gets mountType
    *  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return string|null
    */
    public function getMountType()
    {
        return $this->container['mountType'];
    }

    /**
    * Sets mountType
    *
    * @param string|null $mountType **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return $this
    */
    public function setMountType($mountType)
    {
        $this->container['mountType'] = $mountType;
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

