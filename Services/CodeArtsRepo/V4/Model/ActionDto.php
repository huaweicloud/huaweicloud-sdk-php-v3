<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    * executeFilemode  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'filePath' => 'string',
            'previousPath' => 'string',
            'content' => 'string',
            'encoding' => 'string',
            'lastCommitId' => 'bool',
            'executeFilemode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    * executeFilemode  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'filePath' => null,
        'previousPath' => null,
        'content' => null,
        'encoding' => null,
        'lastCommitId' => null,
        'executeFilemode' => null
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
    * action  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    * executeFilemode  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'filePath' => 'file_path',
            'previousPath' => 'previous_path',
            'content' => 'content',
            'encoding' => 'encoding',
            'lastCommitId' => 'last_commit_id',
            'executeFilemode' => 'execute_filemode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    * executeFilemode  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'filePath' => 'setFilePath',
            'previousPath' => 'setPreviousPath',
            'content' => 'setContent',
            'encoding' => 'setEncoding',
            'lastCommitId' => 'setLastCommitId',
            'executeFilemode' => 'setExecuteFilemode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    * executeFilemode  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'filePath' => 'getFilePath',
            'previousPath' => 'getPreviousPath',
            'content' => 'getContent',
            'encoding' => 'getEncoding',
            'lastCommitId' => 'getLastCommitId',
            'executeFilemode' => 'getExecuteFilemode'
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
    const ACTION_CREATE = 'create';
    const ACTION_CREATE_DIR = 'create_dir';
    const ACTION_UPDATE = 'update';
    const ACTION_MOVE = 'move';
    const ACTION_DELETE = 'delete';
    const ACTION_CHMOD = 'chmod';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
            self::ACTION_CREATE_DIR,
            self::ACTION_UPDATE,
            self::ACTION_MOVE,
            self::ACTION_DELETE,
            self::ACTION_CHMOD,
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['previousPath'] = isset($data['previousPath']) ? $data['previousPath'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['lastCommitId'] = isset($data['lastCommitId']) ? $data['lastCommitId'] : null;
        $this->container['executeFilemode'] = isset($data['executeFilemode']) ? $data['executeFilemode'] : null;
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

        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
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
    *  **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
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
    * @param string $action **参数解释：** 要执行的操作。 **取值范围：** - create，创建文件。 - create_dir，创建目录。 - update，更新。 - move，移动。 - delete，删除。 - chmod，更改权限。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath **参数解释：** 文件路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets previousPath
    *  **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPreviousPath()
    {
        return $this->container['previousPath'];
    }

    /**
    * Sets previousPath
    *
    * @param string|null $previousPath **参数解释：** 上一个路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPreviousPath($previousPath)
    {
        $this->container['previousPath'] = $previousPath;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 文件内容。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释：** 文件内容。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets encoding
    *  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets lastCommitId
    *  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getLastCommitId()
    {
        return $this->container['lastCommitId'];
    }

    /**
    * Sets lastCommitId
    *
    * @param bool|null $lastCommitId **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastCommitId($lastCommitId)
    {
        $this->container['lastCommitId'] = $lastCommitId;
        return $this;
    }

    /**
    * Gets executeFilemode
    *  **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @return bool|null
    */
    public function getExecuteFilemode()
    {
        return $this->container['executeFilemode'];
    }

    /**
    * Sets executeFilemode
    *
    * @param bool|null $executeFilemode **参数解释：** 执行文件模式。 **取值范围：** - true，启用文件上的执行标志。 - false，禁用文件上的执行标志
    *
    * @return $this
    */
    public function setExecuteFilemode($executeFilemode)
    {
        $this->container['executeFilemode'] = $executeFilemode;
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

