<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteBackendTargetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteBackendTargetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetId  绑定关系id
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    * lifecycle  绑定状态。只支持DELETING和FAILED
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetId' => 'string',
            'deleteDataInFileSystem' => 'bool',
            'lifecycle' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetId  绑定关系id
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    * lifecycle  绑定状态。只支持DELETING和FAILED
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetId' => null,
        'deleteDataInFileSystem' => null,
        'lifecycle' => null,
        'xRequestId' => null
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
    * targetId  绑定关系id
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    * lifecycle  绑定状态。只支持DELETING和FAILED
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetId' => 'target_id',
            'deleteDataInFileSystem' => 'delete_data_in_file_system',
            'lifecycle' => 'lifecycle',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetId  绑定关系id
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    * lifecycle  绑定状态。只支持DELETING和FAILED
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'targetId' => 'setTargetId',
            'deleteDataInFileSystem' => 'setDeleteDataInFileSystem',
            'lifecycle' => 'setLifecycle',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetId  绑定关系id
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    * lifecycle  绑定状态。只支持DELETING和FAILED
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'targetId' => 'getTargetId',
            'deleteDataInFileSystem' => 'getDeleteDataInFileSystem',
            'lifecycle' => 'getLifecycle',
            'xRequestId' => 'getXRequestId'
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
    const LIFECYCLE_DELETING = 'DELETING';
    const LIFECYCLE_AVAILABLE = 'AVAILABLE';
    const LIFECYCLE_MISCONFIGURED = 'MISCONFIGURED';
    const LIFECYCLE_CREATING = 'CREATING';
    const LIFECYCLE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifecycleAllowableValues()
    {
        return [
            self::LIFECYCLE_DELETING,
            self::LIFECYCLE_AVAILABLE,
            self::LIFECYCLE_MISCONFIGURED,
            self::LIFECYCLE_CREATING,
            self::LIFECYCLE_FAILED,
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
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['deleteDataInFileSystem'] = isset($data['deleteDataInFileSystem']) ? $data['deleteDataInFileSystem'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLifecycleAllowableValues();
                if (!is_null($this->container['lifecycle']) && !in_array($this->container['lifecycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifecycle', must be one of '%s'",
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
    * Gets targetId
    *  绑定关系id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 绑定关系id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets deleteDataInFileSystem
    *  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    *
    * @return bool|null
    */
    public function getDeleteDataInFileSystem()
    {
        return $this->container['deleteDataInFileSystem'];
    }

    /**
    * Sets deleteDataInFileSystem
    *
    * @param bool|null $deleteDataInFileSystem 删除后端存储时是否同时删除文件系统内的联动目录及其数据文件
    *
    * @return $this
    */
    public function setDeleteDataInFileSystem($deleteDataInFileSystem)
    {
        $this->container['deleteDataInFileSystem'] = $deleteDataInFileSystem;
        return $this;
    }

    /**
    * Gets lifecycle
    *  绑定状态。只支持DELETING和FAILED
    *
    * @return string|null
    */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
    * Sets lifecycle
    *
    * @param string|null $lifecycle 绑定状态。只支持DELETING和FAILED
    *
    * @return $this
    */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

