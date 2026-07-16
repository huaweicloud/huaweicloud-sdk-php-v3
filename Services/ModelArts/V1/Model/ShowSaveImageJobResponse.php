<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSaveImageJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSaveImageJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    * tag  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    * description  该镜像所对应的描述信息，长度限制512个字符。
    * status  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    * message  镜像创建的时间，UTC毫秒。
    * createTime  镜像保存操作过程中，展示构建信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'tag' => 'string',
            'description' => 'string',
            'status' => 'string',
            'message' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    * tag  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    * description  该镜像所对应的描述信息，长度限制512个字符。
    * status  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    * message  镜像创建的时间，UTC毫秒。
    * createTime  镜像保存操作过程中，展示构建信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'tag' => null,
        'description' => null,
        'status' => null,
        'message' => null,
        'createTime' => 'int64'
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
    * name  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    * tag  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    * description  该镜像所对应的描述信息，长度限制512个字符。
    * status  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    * message  镜像创建的时间，UTC毫秒。
    * createTime  镜像保存操作过程中，展示构建信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'tag' => 'tag',
            'description' => 'description',
            'status' => 'status',
            'message' => 'message',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    * tag  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    * description  该镜像所对应的描述信息，长度限制512个字符。
    * status  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    * message  镜像创建的时间，UTC毫秒。
    * createTime  镜像保存操作过程中，展示构建信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'tag' => 'setTag',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    * tag  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    * description  该镜像所对应的描述信息，长度限制512个字符。
    * status  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    * message  镜像创建的时间，UTC毫秒。
    * createTime  镜像保存操作过程中，展示构建信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'tag' => 'getTag',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'createTime' => 'getCreateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[a-z0-9._-]{1,512}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9._-]{1,512}$/.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^[a-z0-9._-]{1,64}$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^[a-z0-9._-]{1,64}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 镜像名称，长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
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
    * @param string|null $namespace 镜像所属组织，可以在SWR控制台“组织管理”创建和查看。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets tag
    *  镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 镜像tag，长度限制64个字符， 支持大小写字母、数字、中划线、下划线和点。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets description
    *  该镜像所对应的描述信息，长度限制512个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 该镜像所对应的描述信息，长度限制512个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
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
    * @param string|null $status 镜像状态。枚举值如下： - INIT：初始化。 - CREATING：镜像保存中，此时训练作业不可用。 - CREATE_FAILED：镜像保存失败。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建训练作业。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  镜像创建的时间，UTC毫秒。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 镜像创建的时间，UTC毫秒。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets createTime
    *  镜像保存操作过程中，展示构建信息。
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
    * @param int|null $createTime 镜像保存操作过程中，展示构建信息。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

