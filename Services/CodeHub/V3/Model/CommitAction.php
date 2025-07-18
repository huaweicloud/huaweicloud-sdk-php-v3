<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  要执行的操作：create、delete、move、update、chmod
    * filePath  文件的完整路径。例如lib/class.rb
    * previousPath  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
    * content  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
    * encoding  文件编码：text、base64。默认为text
    * lastCommitId  最后一个已知的提交ID。仅在update、move、delete操作时生效
    * executeFilemode  启用或者禁用文件的执行模式。仅在chmod操作时生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'filePath' => 'string',
            'previousPath' => 'string',
            'content' => 'string',
            'encoding' => 'string',
            'lastCommitId' => 'string',
            'executeFilemode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  要执行的操作：create、delete、move、update、chmod
    * filePath  文件的完整路径。例如lib/class.rb
    * previousPath  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
    * content  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
    * encoding  文件编码：text、base64。默认为text
    * lastCommitId  最后一个已知的提交ID。仅在update、move、delete操作时生效
    * executeFilemode  启用或者禁用文件的执行模式。仅在chmod操作时生效
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
    * action  要执行的操作：create、delete、move、update、chmod
    * filePath  文件的完整路径。例如lib/class.rb
    * previousPath  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
    * content  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
    * encoding  文件编码：text、base64。默认为text
    * lastCommitId  最后一个已知的提交ID。仅在update、move、delete操作时生效
    * executeFilemode  启用或者禁用文件的执行模式。仅在chmod操作时生效
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
    * action  要执行的操作：create、delete、move、update、chmod
    * filePath  文件的完整路径。例如lib/class.rb
    * previousPath  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
    * content  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
    * encoding  文件编码：text、base64。默认为text
    * lastCommitId  最后一个已知的提交ID。仅在update、move、delete操作时生效
    * executeFilemode  启用或者禁用文件的执行模式。仅在chmod操作时生效
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
    * action  要执行的操作：create、delete、move、update、chmod
    * filePath  文件的完整路径。例如lib/class.rb
    * previousPath  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
    * content  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
    * encoding  文件编码：text、base64。默认为text
    * lastCommitId  最后一个已知的提交ID。仅在update、move、delete操作时生效
    * executeFilemode  启用或者禁用文件的执行模式。仅在chmod操作时生效
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
    *  要执行的操作：create、delete、move、update、chmod
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
    * @param string $action 要执行的操作：create、delete、move、update、chmod
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
    *  文件的完整路径。例如lib/class.rb
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
    * @param string $filePath 文件的完整路径。例如lib/class.rb
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
    *  要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
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
    * @param string|null $previousPath 要移动的文件的原始完整路径。例如lib/class1.rb。仅在move操作时生效
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
    *  文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
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
    * @param string|null $content 文件内容，create和update操作时必须。未指定内容的移动操作将保留现有文件内容，内容的任何其他值将覆盖文件内容。
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
    *  文件编码：text、base64。默认为text
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
    * @param string|null $encoding 文件编码：text、base64。默认为text
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
    *  最后一个已知的提交ID。仅在update、move、delete操作时生效
    *
    * @return string|null
    */
    public function getLastCommitId()
    {
        return $this->container['lastCommitId'];
    }

    /**
    * Sets lastCommitId
    *
    * @param string|null $lastCommitId 最后一个已知的提交ID。仅在update、move、delete操作时生效
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
    *  启用或者禁用文件的执行模式。仅在chmod操作时生效
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
    * @param bool|null $executeFilemode 启用或者禁用文件的执行模式。仅在chmod操作时生效
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

