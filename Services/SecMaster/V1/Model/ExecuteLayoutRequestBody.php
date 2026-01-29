<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteLayoutRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteLayoutRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    * ids  操作布局的id列表
    * uploadFile  上传的文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'ids' => 'string',
            'uploadFile' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    * ids  操作布局的id列表
    * uploadFile  上传的文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'ids' => null,
        'uploadFile' => 'binary'
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
    * action  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    * ids  操作布局的id列表
    * uploadFile  上传的文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'ids' => 'ids',
            'uploadFile' => 'uploadFile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    * ids  操作布局的id列表
    * uploadFile  上传的文件
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'ids' => 'setIds',
            'uploadFile' => 'setUploadFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    * ids  操作布局的id列表
    * uploadFile  上传的文件
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'ids' => 'getIds',
            'uploadFile' => 'getUploadFile'
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
    const ACTION_VERIFY = 'VERIFY';
    const ACTION_IMPORT = 'IMPORT';
    const ACTION_EXPORT = 'EXPORT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_VERIFY,
            self::ACTION_IMPORT,
            self::ACTION_EXPORT,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['uploadFile'] = isset($data['uploadFile']) ? $data['uploadFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ids']) && (mb_strlen($this->container['ids']) > 10)) {
                $invalidProperties[] = "invalid value for 'ids', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['ids']) && (mb_strlen($this->container['ids']) < 1)) {
                $invalidProperties[] = "invalid value for 'ids', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 对布局的操作 VERIFY 校验导入布局压缩包文件 IMPORT  导入布局压缩包文件 EXPORT 导出布局文件
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets ids
    *  操作布局的id列表
    *
    * @return string|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string|null $ids 操作布局的id列表
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets uploadFile
    *  上传的文件
    *
    * @return \SplFileObject|null
    */
    public function getUploadFile()
    {
        return $this->container['uploadFile'];
    }

    /**
    * Sets uploadFile
    *
    * @param \SplFileObject|null $uploadFile 上传的文件
    *
    * @return $this
    */
    public function setUploadFile($uploadFile)
    {
        $this->container['uploadFile'] = $uploadFile;
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

